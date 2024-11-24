<?php 
if ( ! class_exists( 'Limit_Login_Attempts' ) ) { 
class Limit_Login_Attempts { 
var $failed_login_limit = 20; //Number of authentification allowed 
var $lockout_duration   = 1500; // Time = 1500/60 = 25min 
var $transient_name     = 'attempted_login';    //Transient used 
public function __construct() { 
              add_filter( 'authenticate', array( $this, 'check_attempted_login' ), 30, 3 ); 
              add_action( 'wp_login_failed', array( $this, 'login_failed' ), 10, 1 ); 
} 
public function check_attempted_login( $user, $username, $password ) { 
     if ( get_transient( $this->transient_name ) ) { 
       $datas = get_transient( $this->transient_name );   
       if ( $datas['tried'] >= $this->failed_login_limit ) { 
         $until = get_option( '_transient_timeout_' . $this->transient_name ); 
         $time = $this->when( $until ); 
return new WP_Error( 'too_many_tried', sprintf( __( '<strong>      ERROR</strong>: You have reached authentification limit, you will be able to try again in %1$s.' ) , $time ) ); 
      }  
        } 
   return $user; 
} 
public function login_failed( $username ) { 
  if ( get_transient( $this->transient_name ) ) { 
    $datas = get_transient( $this->transient_name ); 
    $datas['tried']++; 
       if ( $datas['tried'] <= $this->failed_login_limit ) 
          set_transient( $this->transient_name, $datas , $this->lockout_duration ); 
       } else { 
         $datas = array( 
         'tried'     => 1 
         ); 
         set_transient( $this->transient_name, $datas , $this->lockout_duration ); 
         } 
       } 
        private function when( $time ) { 
            if ( ! $time ) 
                return; 
            $right_now = time(); 
            $diff = abs( $right_now - $time ); 
            $second = 1; 
            $minute = $second * 60; 
            $hour = $minute * 60; 
            $day = $hour * 24; 
            if ( $diff < $minute ) 
                return floor( $diff / $second ) . ' secondes'; 
            if ( $diff < $minute * 2 ) 
                return "about 1 minute ago"; 
            if ( $diff < $hour ) 
                return floor( $diff / $minute ) . ' minutes'; 
            if ( $diff < $hour * 2 ) 
                return 'about 1 hour'; 
            return floor( $diff / $hour ) . ' hours'; 
        } 
    } 
} 
new Limit_Login_Attempts(); 

function PA1_remove_version( $src ){ 
  $parts = explode( '?', $src ); 
  return $parts[0]; 
} 
add_filter( 'script_loader_src', 'PA1_remove_version', 15, 1 ); 
add_filter( 'style_loader_src', 'PA1_remove_version', 15, 1 ); 


function PA1_remove_error(){ 
wp_dequeue_style('storefront-fonts'); 
} 
add_action( 'wp_enqueue_scripts', 'PA1_remove_error', 999); 

?>