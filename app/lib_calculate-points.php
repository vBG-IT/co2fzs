<?php

function calculatePoints($distance, $transport) {
  if($distance == 0) {
    return 0;
  }
  elseif($distance >= 20) {
    return 100;
  }
  else {
    if($transport == 'foot') {
      return round((10*sqrt(5))*pow($distance, 1 / 2));
    }
    elseif($transport == 'cycle') {
      return round(5*$distance);
    }
    elseif($transport == 'public') {
      return round((1/4)*pow($distance, 2));
    }
    else {
      return 0;
    }
  }
}
