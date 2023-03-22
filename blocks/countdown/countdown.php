<?php 
$countdown_start_date = strval(get_field('countdown_start_date'));
$countdown_end_date = strval(get_field('countdown_end_date'));

var_dump($countdown_end_date);

$timestamp_start = strtotime($countdown_start_date);
$timestamp_end = strtotime($countdown_end_date);

$start_day = date('d', $timestamp_start);
$end_day = date('d', $timestamp_end);

$start_month = date('F', $timestamp_start);
$end_month = date('F', $timestamp_end);
$year = date('Y', $timestamp_start);
$display_date = '';

if(!empty($countdown_end_date)){
    if($start_month === $end_month){
        $display_date =  $start_month . ' ' .$start_day.'-'.$end_day.', '.$year;
        
    }else{
        $display_date =  date('M', $timestamp_start) . ' ' .$start_day.' - '.date('M', $timestamp_end).' '.$end_day.', '.$year;
        $event_date = $timestamp_start;
    }
}else{
    $display_date =  $start_month . ' ' .$start_day.', '.$year;
}



$countdown_time = strtotime($countdown_start_date);

$event_location = get_field('event_location');
$event_direction = get_field('event_waze_direction');

$apple_link = get_field('apple_link');
$google_link = get_field('google_link');
$office365_link = get_field('office365_link');
$outlook_link = get_field('outlook_link');
$outlookcom_link = get_field('outlookcom_link');
$yahoo_link = get_field('yahoo_link');

if($countdown_start_date) :
?>

<div class="il-countdown-wrapper">
    <div class="il-countdown" id="countdown" date="<?php echo $countdown_start_date; ?>"></div>
    <div class="il-countdown-links">
        <ul>
            <?php if( $event_location ): ?>
                <li>
                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.9219 13.0742C11.6094 13.0742 12.1981 12.8374 12.6881 12.3637C13.1773 11.8908 13.4219 11.3221 13.4219 10.6575C13.4219 9.99296 13.1773 9.42383 12.6881 8.95017C12.1981 8.47731 11.6094 8.24087 10.9219 8.24087C10.2344 8.24087 9.64604 8.47731 9.15688 8.95017C8.66688 9.42383 8.42188 9.99296 8.42188 10.6575C8.42188 11.3221 8.66688 11.8908 9.15688 12.3637C9.64604 12.8374 10.2344 13.0742 10.9219 13.0742ZM10.9219 25.1575C7.56771 22.3985 5.06271 19.8356 3.40687 17.4689C1.75021 15.103 0.921875 12.9131 0.921875 10.8992C0.921875 7.87837 1.92729 5.47178 3.93813 3.67942C5.94813 1.88706 8.27604 0.990875 10.9219 0.990875C13.5677 0.990875 15.8956 1.88706 17.9056 3.67942C19.9165 5.47178 20.9219 7.87837 20.9219 10.8992C20.9219 12.9131 20.094 15.103 18.4381 17.4689C16.7815 19.8356 14.276 22.3985 10.9219 25.1575Z" fill="#F3F3F3"/>
                    </svg>
                    <a class="button" href="<?php echo esc_url( $event_location['url'] ); ?>" target="<?php echo esc_attr(  $event_location['target'] ? $event_location['target'] : '_blank'); ?>">   
                        <?php echo esc_html( $event_location['title'] ); ?>
                    </a>
                </li>
            <?php endif; ?>
            <li class="il-countdown-add-to-calendar">
                <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.1723 2.24883H18.4723C19.0823 2.24883 19.6673 2.48061 20.0986 2.89319C20.5299 3.30577 20.7723 3.86535 20.7723 4.44883V19.8488C20.7723 20.4323 20.5299 20.9919 20.0986 21.4045C19.6673 21.817 19.0823 22.0488 18.4723 22.0488H2.37227C1.76227 22.0488 1.17725 21.817 0.74592 21.4045C0.314586 20.9919 0.0722656 20.4323 0.0722656 19.8488V4.44883C0.0722656 3.23883 1.10727 2.24883 2.37227 2.24883H4.67227V0.0488281H6.97227V2.24883H13.8723V0.0488281H16.1723V2.24883ZM2.37227 6.64883V19.8488H18.4723V6.64883H2.37227ZM9.27227 12.1488V9.94883H11.5723V12.1488H13.8723V14.3488H11.5723V16.5488H9.27227V14.3488H6.97227V12.1488H9.27227Z" fill="#F3F3F3"/>
                </svg>
                <div class="add-to-calendar-wrapper" >
                    <span>Add to Calendar</span>
                    <div class="add-to-calendar-links">
                        <?php if( $apple_link ): ?>
                            <a class="button" href="<?php echo esc_url( $apple_link['url'] ); ?>" target="<?php echo esc_attr(  $apple_link['target'] ? $apple_link['target'] : '_blank'); ?>">            
                                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6379 5.78333C12.0629 5.78333 11.3973 6.57247 10.3004 6.57247C9.17579 6.57247 8.31797 5.78907 6.95313 5.78907C5.61719 5.78907 4.19258 6.64547 3.2879 8.1044C2.01758 10.1617 2.23321 14.0365 4.29063 17.3374C5.02657 18.5191 6.00938 19.8443 7.29844 19.8587H7.32188C8.44219 19.8587 8.775 19.0884 10.3168 19.0794H10.3402C11.859 19.0794 12.1637 19.8541 13.2793 19.8541H13.3027C14.5918 19.8398 15.6273 18.3714 16.3633 17.1943C16.893 16.3477 17.0898 15.9228 17.4961 14.9651C14.5199 13.7789 14.0418 9.34881 16.9852 7.65036C16.0867 6.46911 14.8242 5.78497 13.634 5.78497L13.6379 5.78333Z" fill="#00C4CC"/>
                                    <path d="M13.291 1.48242C12.3535 1.54928 11.2598 2.176 10.6192 2.99426C10.0379 3.73582 9.55978 4.83586 9.74728 5.90268H9.82228C10.8207 5.90268 11.8426 5.27145 12.4395 4.46262C13.0145 3.69275 13.4504 2.60174 13.291 1.48242Z" fill="#00C4CC"/>
                                </svg>
                                <span><?php echo esc_html( $apple_link['title'] ); ?></span>
                            </a>
                        <?php endif; ?>

                        <?php if( $google_link ): ?>
                            <a class="button" href="<?php echo esc_url( $google_link['url'] ); ?>" target="<?php echo esc_attr(  $google_link['target'] ? $google_link['target'] : '_blank'); ?>">    
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.6812 8.51914H9.6575V10.9079H15.3537C15.065 14.2416 12.2912 15.6679 9.66624 15.6679C6.31499 15.6679 3.375 13.0254 3.375 9.30664C3.375 5.71914 6.175 2.94539 9.675 2.94539C12.3787 2.94539 13.9625 4.66914 13.9625 4.66914L15.625 2.93664C15.625 2.93664 13.49 0.556641 9.5875 0.556641C4.6175 0.556641 0.776245 4.75664 0.776245 9.30664C0.776245 13.7254 4.39 18.0566 9.71875 18.0566C14.4 18.0566 17.8125 14.8454 17.8125 10.1029C17.8125 9.09664 17.6812 8.51914 17.6812 8.51914Z" fill="#00C4CC"/>
                                </svg>
                                <span><?php echo esc_html( $google_link['title'] ); ?></span> 
                            </a>
                        <?php endif; ?>
                        
                        <?php if( $office365_link ): ?>
                            <a class="button" href="<?php echo esc_url( $office365_link['url'] ); ?>" target="<?php echo esc_attr(  $office365_link['target'] ? $office365_link['target'] : '_blank'); ?>">    
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2604 0.0197144L0.375 4.06051V15.0284L4.00347 13.8739V4.63777L11.2604 3.48325V16.2337L0.375 15.0284L11.2604 18.4919L17.3079 16.7602V1.75148L11.2604 0.0197144Z" fill="#0BCBD7"/>
                                </svg>
                                <span><?php echo esc_html( $office365_link['title'] ); ?></span> 
                            </a>
                        <?php endif; ?>
                        <?php if( $outlook_link ): ?>
                            <a class="button" href="<?php echo esc_url( $outlook_link['url'] ); ?>" target="<?php echo esc_attr(  $outlook_link['target'] ? $outlook_link['target'] : '_blank'); ?>"> 
                                <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3953 5.67322V9.43866L14.7125 10.2671C14.7601 10.2775 14.8093 10.2775 14.8569 10.2671L20.5205 6.44872C20.5164 6.2634 20.4486 6.08516 20.3285 5.94393C20.2085 5.80271 20.0434 5.70712 19.8612 5.67322H13.3953Z" fill="#00C4CC"/>
                                    <path d="M13.3952 10.8433L14.5963 11.6683C14.6525 11.7025 14.7171 11.7206 14.7829 11.7206C14.8488 11.7206 14.9133 11.7025 14.9696 11.6683C14.7633 11.7927 20.5198 7.97089 20.5198 7.97089V14.8913C20.5348 15.0315 20.519 15.1733 20.4734 15.3068C20.4279 15.4403 20.3538 15.5622 20.2562 15.664C20.1586 15.7658 20.04 15.8451 19.9086 15.8963C19.7771 15.9475 19.6361 15.9693 19.4954 15.9603H13.3945L13.3952 10.8433ZM7.17744 9.10732C6.97788 9.10636 6.78178 9.15941 6.60991 9.26083C6.43804 9.36226 6.29682 9.50829 6.20119 9.68345C5.94002 10.1478 5.81471 10.6762 5.83957 11.2083C5.81243 11.7394 5.93791 12.2671 6.20119 12.7291C6.29642 12.897 6.43417 13.037 6.6006 13.1348C6.76704 13.2327 6.9563 13.285 7.14936 13.2865C7.34242 13.288 7.53249 13.2387 7.70045 13.1435C7.86842 13.0483 8.00838 12.9106 8.10626 12.7442C8.36667 12.2843 8.48956 11.7594 8.46032 11.2317C8.49014 10.6875 8.37131 10.1454 8.11657 9.66351C8.02553 9.49406 7.88994 9.3527 7.72443 9.25468C7.55893 9.15666 7.36979 9.10571 7.17744 9.10732Z" fill="#00C4CC"/>
                                    <path d="M1.48022 3.76062V18.4917L12.6865 20.8416V1.59155L1.48022 3.76062ZM8.97947 13.6166C8.76984 13.9121 8.4911 14.1519 8.16756 14.315C7.84401 14.4781 7.48548 14.5596 7.12322 14.5523C6.77009 14.5586 6.42066 14.4795 6.10466 14.3217C5.78866 14.1639 5.51543 13.9322 5.30822 13.6462C4.81679 12.9601 4.57095 12.1283 4.61041 11.2853C4.56861 10.4009 4.81889 9.52736 5.32266 8.7993C5.53494 8.49813 5.81805 8.25381 6.14704 8.08787C6.47603 7.92194 6.84079 7.8395 7.20916 7.8478C7.55974 7.84077 7.90669 7.9199 8.21955 8.07824C8.53241 8.23659 8.80161 8.46932 9.00354 8.75599C9.49006 9.45699 9.73171 10.2989 9.69104 11.1512C9.7339 12.0292 9.48358 12.8965 8.97947 13.6166Z" fill="#00C4CC"/>
                                </svg>
                                <span><?php echo esc_html( $outlook_link['title'] ); ?></span> 
                            </a>
                        <?php endif; ?>
                        <?php if( $outlookcom_link ): ?>
                            <a class="button" href="<?php echo esc_url( $outlookcom_link['url'] ); ?>" target="<?php echo esc_attr(  $outlookcom_link['target'] ? $outlookcom_link['target'] : '_blank'); ?>"> 
                                <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3953 5.67322V9.43866L14.7125 10.2671C14.7601 10.2775 14.8093 10.2775 14.8569 10.2671L20.5205 6.44872C20.5164 6.2634 20.4486 6.08516 20.3285 5.94393C20.2085 5.80271 20.0434 5.70712 19.8612 5.67322H13.3953Z" fill="#00C4CC"/>
                                    <path d="M13.3952 10.8433L14.5963 11.6683C14.6525 11.7025 14.7171 11.7206 14.7829 11.7206C14.8488 11.7206 14.9133 11.7025 14.9696 11.6683C14.7633 11.7927 20.5198 7.97089 20.5198 7.97089V14.8913C20.5348 15.0315 20.519 15.1733 20.4734 15.3068C20.4279 15.4403 20.3538 15.5622 20.2562 15.664C20.1586 15.7658 20.04 15.8451 19.9086 15.8963C19.7771 15.9475 19.6361 15.9693 19.4954 15.9603H13.3945L13.3952 10.8433ZM7.17744 9.10732C6.97788 9.10636 6.78178 9.15941 6.60991 9.26083C6.43804 9.36226 6.29682 9.50829 6.20119 9.68345C5.94002 10.1478 5.81471 10.6762 5.83957 11.2083C5.81243 11.7394 5.93791 12.2671 6.20119 12.7291C6.29642 12.897 6.43417 13.037 6.6006 13.1348C6.76704 13.2327 6.9563 13.285 7.14936 13.2865C7.34242 13.288 7.53249 13.2387 7.70045 13.1435C7.86842 13.0483 8.00838 12.9106 8.10626 12.7442C8.36667 12.2843 8.48956 11.7594 8.46032 11.2317C8.49014 10.6875 8.37131 10.1454 8.11657 9.66351C8.02553 9.49406 7.88994 9.3527 7.72443 9.25468C7.55893 9.15666 7.36979 9.10571 7.17744 9.10732Z" fill="#00C4CC"/>
                                    <path d="M1.48022 3.76062V18.4917L12.6865 20.8416V1.59155L1.48022 3.76062ZM8.97947 13.6166C8.76984 13.9121 8.4911 14.1519 8.16756 14.315C7.84401 14.4781 7.48548 14.5596 7.12322 14.5523C6.77009 14.5586 6.42066 14.4795 6.10466 14.3217C5.78866 14.1639 5.51543 13.9322 5.30822 13.6462C4.81679 12.9601 4.57095 12.1283 4.61041 11.2853C4.56861 10.4009 4.81889 9.52736 5.32266 8.7993C5.53494 8.49813 5.81805 8.25381 6.14704 8.08787C6.47603 7.92194 6.84079 7.8395 7.20916 7.8478C7.55974 7.84077 7.90669 7.9199 8.21955 8.07824C8.53241 8.23659 8.80161 8.46932 9.00354 8.75599C9.49006 9.45699 9.73171 10.2989 9.69104 11.1512C9.7339 12.0292 9.48358 12.8965 8.97947 13.6166Z" fill="#00C4CC"/>
                                </svg>
                                <span><?php echo esc_html( $outlookcom_link['title'] ); ?></span> 
                            </a>
                        <?php endif; ?>
                        <?php if( $yahoo_link ): ?>
                            <a class="button" href="<?php echo esc_url( $yahoo_link['url'] ); ?>" target="<?php echo esc_attr(  $yahoo_link['target'] ? $yahoo_link['target'] : '_blank'); ?>"> 
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 4.44302L6.16 10.053L3.85 4.44302H0L4.29 14.083L2.75 17.553H6.5L12.24 4.44302H8.5ZM13 9.58301C11.63 9.58301 10.59 10.623 10.59 11.853C10.59 13.023 11.59 14.013 12.93 14.013C14.32 14.013 15.36 12.983 15.36 11.753C15.36 10.543 14.36 9.58301 13 9.58301ZM15.72 0.153015L11.89 8.74302H16.17L20 0.153015H15.72Z" fill="#00C4CC"/>
                                </svg>    
                                <span><?php echo esc_html( $yahoo_link['title'] ); ?></span> 
                            </a>
                        <?php endif; ?>
                    </div>
                </div>


            </li>
            <li>
                <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.92188 14.4272C5.60313 14.4272 5.33575 14.3192 5.11975 14.1032C4.9045 13.888 4.79688 13.621 4.79688 13.3022C4.79688 12.9835 4.9045 12.7161 5.11975 12.5001C5.33575 12.2849 5.60313 12.1772 5.92188 12.1772C6.24062 12.1772 6.508 12.2849 6.724 12.5001C6.93925 12.7161 7.04688 12.9835 7.04688 13.3022C7.04688 13.621 6.93925 13.888 6.724 14.1032C6.508 14.3192 6.24062 14.4272 5.92188 14.4272ZM10.4219 14.4272C10.1031 14.4272 9.83613 14.3192 9.62088 14.1032C9.40488 13.888 9.29688 13.621 9.29688 13.3022C9.29688 12.9835 9.40488 12.7161 9.62088 12.5001C9.83613 12.2849 10.1031 12.1772 10.4219 12.1772C10.7406 12.1772 11.008 12.2849 11.224 12.5001C11.4393 12.7161 11.5469 12.9835 11.5469 13.3022C11.5469 13.621 11.4393 13.888 11.224 14.1032C11.008 14.3192 10.7406 14.4272 10.4219 14.4272ZM14.9219 14.4272C14.6031 14.4272 14.3361 14.3192 14.1209 14.1032C13.9049 13.888 13.7969 13.621 13.7969 13.3022C13.7969 12.9835 13.9049 12.7161 14.1209 12.5001C14.3361 12.2849 14.6031 12.1772 14.9219 12.1772C15.2406 12.1772 15.5076 12.2849 15.7229 12.5001C15.9389 12.7161 16.0469 12.9835 16.0469 13.3022C16.0469 13.621 15.9389 13.888 15.7229 14.1032C15.5076 14.3192 15.2406 14.4272 14.9219 14.4272ZM2.54688 23.4272C1.92812 23.4272 1.39825 23.2071 0.95725 22.7669C0.517 22.3259 0.296875 21.796 0.296875 21.1772V5.42725C0.296875 4.8085 0.517 4.279 0.95725 3.83875C1.39825 3.39775 1.92812 3.17725 2.54688 3.17725H3.67188V2.02412C3.67188 1.70537 3.7795 1.44287 3.99475 1.23662C4.21075 1.03037 4.47813 0.927246 4.79688 0.927246C5.11562 0.927246 5.383 1.03487 5.599 1.25012C5.81425 1.46612 5.92188 1.7335 5.92188 2.05225V3.17725H14.9219V2.02412C14.9219 1.70537 15.0299 1.44287 15.2459 1.23662C15.4611 1.03037 15.7281 0.927246 16.0469 0.927246C16.3656 0.927246 16.6326 1.03487 16.8479 1.25012C17.0639 1.46612 17.1719 1.7335 17.1719 2.05225V3.17725H18.2969C18.9156 3.17725 19.4455 3.39775 19.8865 3.83875C20.3268 4.279 20.5469 4.8085 20.5469 5.42725V21.1772C20.5469 21.796 20.3268 22.3259 19.8865 22.7669C19.4455 23.2071 18.9156 23.4272 18.2969 23.4272H2.54688ZM2.54688 21.1772H18.2969V9.92725H2.54688V21.1772Z" fill="#F3F3F3"/>
                </svg>
                <?php echo $display_date; ?>
            </li>
            <?php if( $event_direction ): ?>
                <li>   
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.13687 17.0742C4.16362 16.5899 3.30586 15.902 2.62175 15.0572C1.93764 14.2123 1.44318 13.2303 1.17188 12.1776C3.33854 12.1776 4.42187 11.0942 4.42187 9.4584C4.42187 5.21174 6.85937 1.34424 12.4169 1.34424C17.4219 1.34424 20.6719 5.14674 20.6719 10.0109C20.6789 11.4131 20.349 12.7964 19.7098 14.0444C19.0707 15.2925 18.1412 16.3687 16.9994 17.1826M8.75521 18.3417C9.94438 18.5664 11.1525 18.6752 12.3627 18.6667H12.9477" stroke="#F3F3F3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.2552 7.84424H15.266M9.83854 7.84424H9.84938M13.0885 18.6776C13.0885 19.2522 13.3168 19.8033 13.7231 20.2096C14.1295 20.616 14.6806 20.8442 15.2552 20.8442C15.8298 20.8442 16.3809 20.616 16.7873 20.2096C17.1936 19.8033 17.4219 19.2522 17.4219 18.6776C17.4219 18.1029 17.1936 17.5518 16.7873 17.1455C16.3809 16.7392 15.8298 16.5109 15.2552 16.5109C14.6806 16.5109 14.1295 16.7392 13.7231 17.1455C13.3168 17.5518 13.0885 18.1029 13.0885 18.6776ZM4.42188 18.6776C4.42188 19.2522 4.65015 19.8033 5.05648 20.2096C5.46281 20.616 6.01391 20.8442 6.58854 20.8442C7.16318 20.8442 7.71428 20.616 8.12061 20.2096C8.52693 19.8033 8.75521 19.2522 8.75521 18.6776C8.75521 18.1029 8.52693 17.5518 8.12061 17.1455C7.71428 16.7392 7.16318 16.5109 6.58854 16.5109C6.01391 16.5109 5.46281 16.7392 5.05648 17.1455C4.65015 17.5518 4.42188 18.1029 4.42188 18.6776Z" stroke="#F3F3F3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a class="button" href="<?php echo esc_url( $event_direction['url'] ); ?>" target="<?php echo esc_attr(  $event_direction['target'] ? $event_direction['target'] : '_blank'); ?>"> 
                    <?php echo esc_html( $event_direction['title'] ); ?>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<?php endif; ?>
