<?php 
$countdown_start_date = strval(get_field('countdown_start_date'));
$countdown_end_date = strval(get_field('countdown_end_date'));

$timestamp_start = strtotime($countdown_start_date);
$timestamp_end = strtotime($countdown_end_date);

$start_day = date('d', $timestamp_start);
$end_day = date('d', $timestamp_end);

$start_month = date('F', $timestamp_start);
$end_month = date('F', $timestamp_end);
$year = date('Y', $timestamp_start);
$display_date = '';
if($start_month === $end_month){
    $display_date =  $start_month . ' ' .$start_day.'-'.$end_day.', '.$year;
}else{
    $display_date =  date('M', $timestamp_start) . ' ' .$start_day.' - '.date('M', $timestamp_end).' '.$end_day.', '.$year;
}


$countdown_time = strtotime($countdown_start_date);
?>

<div class="container">
    <div class="il-countdown-wrapper">
        <div class="il-countdown" id="countdown" date="<?php echo $countdown_start_date; ?>">
        </div>
        <div class="il-countdown-links">
            <ul>
                <li>
                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.9219 13.0742C11.6094 13.0742 12.1981 12.8374 12.6881 12.3637C13.1773 11.8908 13.4219 11.3221 13.4219 10.6575C13.4219 9.99296 13.1773 9.42383 12.6881 8.95017C12.1981 8.47731 11.6094 8.24087 10.9219 8.24087C10.2344 8.24087 9.64604 8.47731 9.15688 8.95017C8.66688 9.42383 8.42188 9.99296 8.42188 10.6575C8.42188 11.3221 8.66688 11.8908 9.15688 12.3637C9.64604 12.8374 10.2344 13.0742 10.9219 13.0742ZM10.9219 25.1575C7.56771 22.3985 5.06271 19.8356 3.40687 17.4689C1.75021 15.103 0.921875 12.9131 0.921875 10.8992C0.921875 7.87837 1.92729 5.47178 3.93813 3.67942C5.94813 1.88706 8.27604 0.990875 10.9219 0.990875C13.5677 0.990875 15.8956 1.88706 17.9056 3.67942C19.9165 5.47178 20.9219 7.87837 20.9219 10.8992C20.9219 12.9131 20.094 15.103 18.4381 17.4689C16.7815 19.8356 14.276 22.3985 10.9219 25.1575Z" fill="#F3F3F3"/>
                    </svg>
                    <a target="_blank" href="https://www.google.com/maps/search/?api=1&amp;query=Sheba%20Medical%20Center">
                        
                            Sheba Medical Center
                    </a>
                </li>
                <li class="il-countdown-add-to-calendar">
                    <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.1723 2.24883H18.4723C19.0823 2.24883 19.6673 2.48061 20.0986 2.89319C20.5299 3.30577 20.7723 3.86535 20.7723 4.44883V19.8488C20.7723 20.4323 20.5299 20.9919 20.0986 21.4045C19.6673 21.817 19.0823 22.0488 18.4723 22.0488H2.37227C1.76227 22.0488 1.17725 21.817 0.74592 21.4045C0.314586 20.9919 0.0722656 20.4323 0.0722656 19.8488V4.44883C0.0722656 3.23883 1.10727 2.24883 2.37227 2.24883H4.67227V0.0488281H6.97227V2.24883H13.8723V0.0488281H16.1723V2.24883ZM2.37227 6.64883V19.8488H18.4723V6.64883H2.37227ZM9.27227 12.1488V9.94883H11.5723V12.1488H13.8723V14.3488H11.5723V16.5488H9.27227V14.3488H6.97227V12.1488H9.27227Z" fill="#F3F3F3"/>
                    </svg>
                    <div class="add-to-calendar-wrapper" >
                        <span>Add to Calendar</span>
                        <div class="add-to-calendar-links">
                            <a target="_blank" href="https://www.codexworld.com/newyork_event.ics">Apple</a>
                            <a target="_blank" href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=My Event&details=Event description text&dates=20220305T103000/20220305T184500&location=New York City">
                                Google 
                            </a>

                            <a href="https://outlook.office.com/calendar/0/deeplink/compose?allday=false&enddt=2023-03-22T11%3A45%3A00%2B00%3A00&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2023-03-22T11%3A15%3A00%2B00%3A00" title="Save Event in my Calendar">Office 365</a>

                            <a target="_blank" href="https://outlook.live.com/calendar/calendar.aspx?rru=addevent&dtstart=20151119T140000Z&dtend=20151119T160000Z&summary=Summary+of+the+event&location=Location+of+the+event&description=example+text.&allday=false&uid=">
                                Outlook
                            </a>
                            <a target="_blank" href="https://outlook.office.com/calendar/0/deeplink/compose?subject=My Event&body=Event description text&startdt=2022-03-05T10:30:00+00:00&enddt=2022-03-05T18:45:00+00:00&location=New York City&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent">
                                Outlook.com
                            </a>
                            <a target="_blank" href="https://calendar.yahoo.com/?v=60&view=d&type=20&title=Summary+of+the+event&st=20151119T090000&et=20151119T110000&desc=example+text.%0A%0AThis+is+the+text+entered+in+the+event+description+field.&in_loc=Location+of+the+event&uid=">
                                Yahoo
                            </a>
                        </div>
                    </div>


                </li>
                <li>
                    <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.92188 14.4272C5.60313 14.4272 5.33575 14.3192 5.11975 14.1032C4.9045 13.888 4.79688 13.621 4.79688 13.3022C4.79688 12.9835 4.9045 12.7161 5.11975 12.5001C5.33575 12.2849 5.60313 12.1772 5.92188 12.1772C6.24062 12.1772 6.508 12.2849 6.724 12.5001C6.93925 12.7161 7.04688 12.9835 7.04688 13.3022C7.04688 13.621 6.93925 13.888 6.724 14.1032C6.508 14.3192 6.24062 14.4272 5.92188 14.4272ZM10.4219 14.4272C10.1031 14.4272 9.83613 14.3192 9.62088 14.1032C9.40488 13.888 9.29688 13.621 9.29688 13.3022C9.29688 12.9835 9.40488 12.7161 9.62088 12.5001C9.83613 12.2849 10.1031 12.1772 10.4219 12.1772C10.7406 12.1772 11.008 12.2849 11.224 12.5001C11.4393 12.7161 11.5469 12.9835 11.5469 13.3022C11.5469 13.621 11.4393 13.888 11.224 14.1032C11.008 14.3192 10.7406 14.4272 10.4219 14.4272ZM14.9219 14.4272C14.6031 14.4272 14.3361 14.3192 14.1209 14.1032C13.9049 13.888 13.7969 13.621 13.7969 13.3022C13.7969 12.9835 13.9049 12.7161 14.1209 12.5001C14.3361 12.2849 14.6031 12.1772 14.9219 12.1772C15.2406 12.1772 15.5076 12.2849 15.7229 12.5001C15.9389 12.7161 16.0469 12.9835 16.0469 13.3022C16.0469 13.621 15.9389 13.888 15.7229 14.1032C15.5076 14.3192 15.2406 14.4272 14.9219 14.4272ZM2.54688 23.4272C1.92812 23.4272 1.39825 23.2071 0.95725 22.7669C0.517 22.3259 0.296875 21.796 0.296875 21.1772V5.42725C0.296875 4.8085 0.517 4.279 0.95725 3.83875C1.39825 3.39775 1.92812 3.17725 2.54688 3.17725H3.67188V2.02412C3.67188 1.70537 3.7795 1.44287 3.99475 1.23662C4.21075 1.03037 4.47813 0.927246 4.79688 0.927246C5.11562 0.927246 5.383 1.03487 5.599 1.25012C5.81425 1.46612 5.92188 1.7335 5.92188 2.05225V3.17725H14.9219V2.02412C14.9219 1.70537 15.0299 1.44287 15.2459 1.23662C15.4611 1.03037 15.7281 0.927246 16.0469 0.927246C16.3656 0.927246 16.6326 1.03487 16.8479 1.25012C17.0639 1.46612 17.1719 1.7335 17.1719 2.05225V3.17725H18.2969C18.9156 3.17725 19.4455 3.39775 19.8865 3.83875C20.3268 4.279 20.5469 4.8085 20.5469 5.42725V21.1772C20.5469 21.796 20.3268 22.3259 19.8865 22.7669C19.4455 23.2071 18.9156 23.4272 18.2969 23.4272H2.54688ZM2.54688 21.1772H18.2969V9.92725H2.54688V21.1772Z" fill="#F3F3F3"/>
                    </svg>
                    <?php echo $display_date; ?>
                </li>
                <li>   
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.13687 17.0742C4.16362 16.5899 3.30586 15.902 2.62175 15.0572C1.93764 14.2123 1.44318 13.2303 1.17188 12.1776C3.33854 12.1776 4.42187 11.0942 4.42187 9.4584C4.42187 5.21174 6.85937 1.34424 12.4169 1.34424C17.4219 1.34424 20.6719 5.14674 20.6719 10.0109C20.6789 11.4131 20.349 12.7964 19.7098 14.0444C19.0707 15.2925 18.1412 16.3687 16.9994 17.1826M8.75521 18.3417C9.94438 18.5664 11.1525 18.6752 12.3627 18.6667H12.9477" stroke="#F3F3F3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.2552 7.84424H15.266M9.83854 7.84424H9.84938M13.0885 18.6776C13.0885 19.2522 13.3168 19.8033 13.7231 20.2096C14.1295 20.616 14.6806 20.8442 15.2552 20.8442C15.8298 20.8442 16.3809 20.616 16.7873 20.2096C17.1936 19.8033 17.4219 19.2522 17.4219 18.6776C17.4219 18.1029 17.1936 17.5518 16.7873 17.1455C16.3809 16.7392 15.8298 16.5109 15.2552 16.5109C14.6806 16.5109 14.1295 16.7392 13.7231 17.1455C13.3168 17.5518 13.0885 18.1029 13.0885 18.6776ZM4.42188 18.6776C4.42188 19.2522 4.65015 19.8033 5.05648 20.2096C5.46281 20.616 6.01391 20.8442 6.58854 20.8442C7.16318 20.8442 7.71428 20.616 8.12061 20.2096C8.52693 19.8033 8.75521 19.2522 8.75521 18.6776C8.75521 18.1029 8.52693 17.5518 8.12061 17.1455C7.71428 16.7392 7.16318 16.5109 6.58854 16.5109C6.01391 16.5109 5.46281 16.7392 5.05648 17.1455C4.65015 17.5518 4.42188 18.1029 4.42188 18.6776Z" stroke="#F3F3F3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a target="_blank" href="https://www.waze.com/en-GB/live-map/directions?navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location&to=ll.32.04730623%2C34.84284997">
                        Arrival directions via Waze
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
