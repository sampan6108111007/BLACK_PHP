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
            for ($black=1; $black <= 3; $black++)
            {
                for ($sampan=$black; $sampan <= 3; $sampan++)
                {
                   echo ($sampan);
                }
                for ($sampan=1; $sampan <= $black; $sampan++)
                {
                   echo ("*");
                }
                for ($sampan=2; $sampan <= $black; $sampan++)
                {
                   echo ("*");
                }
                for ($sampan=3; $sampan >= $black; $sampan--)
                {
                   echo ($sampan);
                }
                
           echo ("\n");
            }
            for ($black=2; $black <= 3; $black++)
            {
                for ($sampan=1; $sampan <= $black; $sampan++)
                {
                   echo (4-(4-$sampan));
                }
                for ($sampan=$black; $sampan <= 3; $sampan++)
                {
                   echo ("*");
                }
                for ($sampan=$black; $sampan <= 2; $sampan++)
                {
                   echo ("*");
                }
                for ($sampan=1; $sampan <= $black; $sampan++)
                {
                   echo (4-$sampan);
                }
           echo ("\n");
            }
        ?>
    </pre>
</body>