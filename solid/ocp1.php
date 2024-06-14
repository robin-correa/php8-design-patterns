<?php

/*
Open/Closed Principle 1 (OCP)
    Focus: Consumable Classes (classes that provide functionality)
    Purpose: Ensures that classes can be extended without modifying existing code.
    Example: You can add new types of reports (PdfReport, ExcelReport) without changing the ReportGenerator class. The ReportGenerator can work with any class that implements the ReportInterface.
*/

namespace RobinCorrea\Php8DesignPatterns\SOLID\OCP;

// Consumable interface for all report types
interface ReportInterface
{
    public function generate(): string;
}

// Implementation of PDF report
class PdfReport implements ReportInterface
{
    public function generate(): string
    {
        return 'Generating PDF report';
    }
}

// Implementation of Excel report
class ExcelReport implements ReportInterface
{
    public function generate(): string
    {
        return 'Generating Excel report';
    }
}

// Consumer class that uses the ReportInterface
class ReportGenerator
{
    private $report;

    public function __construct(ReportInterface $report)
    {
        $this->report = $report;
    }

    public function generateReport(): void
    {
        echo $this->report->generate()."\n";
    }
}

// Usage example
$pdfReport = new PdfReport();
$reportGenerator = new ReportGenerator($pdfReport);
$reportGenerator->generateReport();

$excelReport = new ExcelReport();
$reportGenerator = new ReportGenerator($excelReport);
$reportGenerator->generateReport();
