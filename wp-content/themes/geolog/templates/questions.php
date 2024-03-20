<?php
$questions = get_field('questions');
if($questions) {
    foreach($questions as $question) {
    ?>
        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span><?php echo $question->post_title; ?></span> <span> <svg viewBox="0 0 15 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                <?php echo $question->post_content; ?>
            </div>
        </div>
    <?php
    }
}
?>