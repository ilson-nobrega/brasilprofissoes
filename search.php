<?php
    echo 'x';
    if ($_POST['searchform']){
    
        // Get the search query
        $search_query = $_POST['q'];
    
        header("Location: search/" . urlencode($search_query));
        exit();
        
    }else if($_GET['q']){
        
        $query_from_url = $_GET['q'];
    
        echo "The query from the URL is" . $query_from_url;
    }