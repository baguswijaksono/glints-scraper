<?php
function getJobTitles($url) {
    $html = file_get_contents($url);

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $query = "//h3[contains(@class, 'CompactOpportunityCardsc__JobTitle-sc-dkg8my-9 hgMGcy')]";
    $jobTitles = [];

    $jobTitleNodes = $xpath->query($query);

    if ($jobTitleNodes !== false && $jobTitleNodes->length > 0) {
        foreach ($jobTitleNodes as $jobTitleNode) {
            $jobTitles[] = $jobTitleNode->textContent;
        }
    } else {
        $jobTitles[] = "Job titles with the specified class not found.";
    }

    return $jobTitles;
}



function getJobSalary($url) {
    $html = file_get_contents($url);

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $query = "//span[contains(@class, 'CompactOpportunityCardsc__SalaryWrapper-sc-dkg8my-29 gfPeyg')]";
    $jobTitles = [];

    $jobTitleNodes = $xpath->query($query);

    if ($jobTitleNodes !== false && $jobTitleNodes->length > 0) {
        foreach ($jobTitleNodes as $jobTitleNode) {
            $jobTitles[] = $jobTitleNode->textContent;
        }
    } else {
        $jobTitles[] = "Job titles with the specified class not found.";
    }

    return $jobTitles;
}

function getJobCategory($url) {
    $html = file_get_contents($url);

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $query = "//p[contains(@class, 'TypographyStyles__StyledTypography-sc-ro16eu-0 ddcxqH PopularJobssc__JobText-sc-3jhw5e-2 dmFhTX')]";
    $jobCategories = [];

    $jobCategoryNodes = $xpath->query($query);

    if ($jobCategoryNodes !== false && $jobCategoryNodes->length > 0) {
        foreach ($jobCategoryNodes as $jobCategoryNode) {
            $jobCategories[] = $jobCategoryNode->textContent;
        }
    } else {
        $jobCategories[] = "Job categories with the specified class not found.";
    }

    return $jobCategories;
}



?>