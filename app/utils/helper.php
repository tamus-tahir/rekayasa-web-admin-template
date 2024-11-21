<?php

use App\Models\Setting;

function successCreateMessage()
{
  return 'Data saved successfully';
}

function successUpdateMessage()
{
  return 'Data updated successfully';
}

function successDeleteMessage()
{
  return 'Data deleted successfully';
}

function getSetting()
{
  return Setting::get()->first();
}
