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
            for ($black=1; $black <= 5; $black++)
            {
                for ($sampan=7; $sampan >= $black; $sampan--)
                {
                    echo (8-$sampan);
                }
                for ($sampan=1; $sampan <= $black+2; $sampan++)
                {
                    echo ("*");
                }
                echo ($black+2) ;  
            echo ("\n");
            }
        ?>
    </pre>
</body>