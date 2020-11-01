<?php

interface HistoryAwareInterface
{
    function getCreatedAt();
    function getCreatedBy();
    function getModifiedAt();
    function getModifiedBy();
}
