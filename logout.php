<?php
session_start();
session_destroy();
echo "Vous avez été déconnecté";
exit;
