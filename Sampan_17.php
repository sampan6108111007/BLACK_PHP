<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($black=1; $black <= 7; $black++)
            {
                 for ($sampan=1; $sampan <= $black; $sampan++)
                {
                    echo (" ");
                }
                for ($sampan=0; $sampan < 3; $sampan++)
                {
                    echo ($sampan+$black);
                }
                for ($sampan=0; $sampan <= $black; $sampan++)
                {
                    echo ("*");
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>
