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
                for ($sampan=$black; $sampan <= 5; $sampan++)
                {
                    echo ($black);
                }
                for ($sampan=1; $sampan <= $black; $sampan++)
                {
                    echo ("*");
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>