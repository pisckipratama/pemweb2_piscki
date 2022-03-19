<?php

function kelulusan($_nilai)
{
  if ($_nilai > 55 && $_nilai < 100) {
    return "LULUS";
  } elseif ($_nilai <= 55 && $_nilai > 0) {
    return "BELUM LULUS";
  } else {
    return false;
  }
}

function grade($_nilai)
{
  switch ($_nilai) {
    case $_nilai >= 80 && $_nilai <= 100:
      return "A";
      break;
    case $_nilai >= 70 && $_nilai <= 84:
      return "B";
      break;
    case $_nilai >= 56 && $_nilai <= 69:
      return "C";
      break;
    case $_nilai >= 36 && $_nilai <= 55:
      return "D";
      break;
    case $_nilai >= 0 && $_nilai <= 35:
      return "E";
      break;
    default:
      return "I";
      break;
  }
}

function predikat($_grade)
{
  switch ($_grade) {
    case "A":
      return "Sangat Memuaskan";
      break;
    case "B":
      return "Memuaskan";
      break;
    case "C":
      return "Cukup";
      break;
    case "D":
      return "Kurang";
      break;
    case "E":
      return "Sangat Kurang";
      break;
    default:
      return "Tidak Ada";
      break;
  }
}
