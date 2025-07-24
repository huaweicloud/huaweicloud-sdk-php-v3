<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codeSize  代码规模
    * rawLines  原始代码行数
    * methodsTotal  函数总数
    * cyclomaticComplexityTotal  圈复杂度总数
    * cyclomaticComplexityPerMethod  平均圈复杂度
    * maximumCyclomaticComplexity  最大圈复杂度
    * hugeCyclomaticComplexityTotal  超大圈复杂度数
    * hugeCyclomaticComplexityRatio  超大圈复杂度比例
    * ccaCyclomaticComplexityTotal  cca圈复杂度总数
    * ccaCyclomaticComplexityPerMethod  cca平均圈复杂度
    * maximumCcaCyclomaticComplexity  cca最大圈复杂度
    * hugeCcaCyclomaticComplexityTotal  超大圈复杂度函数总数
    * cyclomaticComplexityAdequacy  圈复杂度满足度
    * maximumDepth  最大深度
    * hugeDepthTotal  超大深度数
    * hugeDepthRatio  超大深度占比
    * methodLines  函数总行数
    * linesPerMethod  函数平均代码行
    * hugeMethodTotal  超大函数数
    * hugeMethodRatio  超大函数占比
    * filesTotal  文件总数
    * foldersTotal  目录总数
    * linesPerFile  文件平均代码行
    * hugeHeaderfileTotal  超大头文件数
    * hugeHeaderfileRatio  超大头文件占比
    * hugeNonHeaderfileTotal  超大源文件数
    * hugeNonHeaderfileRatio  超大源文件占比
    * hugeFolderTotal  超大目录数
    * hugeFolderRatio  超大目录占比
    * fileDuplicationTotal  重复文件数
    * fileDuplicationRatio  文件重复率
    * nonHfileDuplicationTotal  重复源文件数
    * nonHfileDuplicationRatio  源文件重复率
    * codeDuplicationTotal  代码重复数
    * codeDuplicationRatio  代码重复率
    * nonHfileCodeDuplicationTotal  源文件代码重复数
    * nonHfileCodeDuplicationRatio  源文件代码重复率
    * unsafeFunctionsTotal  危险函数总数
    * unsafeFunctionsKloc  危险函数密度
    * redundantCodeTotal  冗余代码数
    * redundantCodeKloc  冗余代码块密度
    * warningSuppressionTotal  抑制告警数
    * warningSuppressionKloc  抑制告警密度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codeSize' => 'string',
            'rawLines' => 'string',
            'methodsTotal' => 'string',
            'cyclomaticComplexityTotal' => 'string',
            'cyclomaticComplexityPerMethod' => 'string',
            'maximumCyclomaticComplexity' => 'string',
            'hugeCyclomaticComplexityTotal' => 'string',
            'hugeCyclomaticComplexityRatio' => 'string',
            'ccaCyclomaticComplexityTotal' => 'string',
            'ccaCyclomaticComplexityPerMethod' => 'string',
            'maximumCcaCyclomaticComplexity' => 'string',
            'hugeCcaCyclomaticComplexityTotal' => 'string',
            'cyclomaticComplexityAdequacy' => 'string',
            'maximumDepth' => 'string',
            'hugeDepthTotal' => 'string',
            'hugeDepthRatio' => 'string',
            'methodLines' => 'string',
            'linesPerMethod' => 'string',
            'hugeMethodTotal' => 'string',
            'hugeMethodRatio' => 'string',
            'filesTotal' => 'string',
            'foldersTotal' => 'string',
            'linesPerFile' => 'string',
            'hugeHeaderfileTotal' => 'string',
            'hugeHeaderfileRatio' => 'string',
            'hugeNonHeaderfileTotal' => 'string',
            'hugeNonHeaderfileRatio' => 'string',
            'hugeFolderTotal' => 'string',
            'hugeFolderRatio' => 'string',
            'fileDuplicationTotal' => 'string',
            'fileDuplicationRatio' => 'string',
            'nonHfileDuplicationTotal' => 'string',
            'nonHfileDuplicationRatio' => 'string',
            'codeDuplicationTotal' => 'string',
            'codeDuplicationRatio' => 'string',
            'nonHfileCodeDuplicationTotal' => 'string',
            'nonHfileCodeDuplicationRatio' => 'string',
            'unsafeFunctionsTotal' => 'string',
            'unsafeFunctionsKloc' => 'string',
            'redundantCodeTotal' => 'string',
            'redundantCodeKloc' => 'string',
            'warningSuppressionTotal' => 'string',
            'warningSuppressionKloc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codeSize  代码规模
    * rawLines  原始代码行数
    * methodsTotal  函数总数
    * cyclomaticComplexityTotal  圈复杂度总数
    * cyclomaticComplexityPerMethod  平均圈复杂度
    * maximumCyclomaticComplexity  最大圈复杂度
    * hugeCyclomaticComplexityTotal  超大圈复杂度数
    * hugeCyclomaticComplexityRatio  超大圈复杂度比例
    * ccaCyclomaticComplexityTotal  cca圈复杂度总数
    * ccaCyclomaticComplexityPerMethod  cca平均圈复杂度
    * maximumCcaCyclomaticComplexity  cca最大圈复杂度
    * hugeCcaCyclomaticComplexityTotal  超大圈复杂度函数总数
    * cyclomaticComplexityAdequacy  圈复杂度满足度
    * maximumDepth  最大深度
    * hugeDepthTotal  超大深度数
    * hugeDepthRatio  超大深度占比
    * methodLines  函数总行数
    * linesPerMethod  函数平均代码行
    * hugeMethodTotal  超大函数数
    * hugeMethodRatio  超大函数占比
    * filesTotal  文件总数
    * foldersTotal  目录总数
    * linesPerFile  文件平均代码行
    * hugeHeaderfileTotal  超大头文件数
    * hugeHeaderfileRatio  超大头文件占比
    * hugeNonHeaderfileTotal  超大源文件数
    * hugeNonHeaderfileRatio  超大源文件占比
    * hugeFolderTotal  超大目录数
    * hugeFolderRatio  超大目录占比
    * fileDuplicationTotal  重复文件数
    * fileDuplicationRatio  文件重复率
    * nonHfileDuplicationTotal  重复源文件数
    * nonHfileDuplicationRatio  源文件重复率
    * codeDuplicationTotal  代码重复数
    * codeDuplicationRatio  代码重复率
    * nonHfileCodeDuplicationTotal  源文件代码重复数
    * nonHfileCodeDuplicationRatio  源文件代码重复率
    * unsafeFunctionsTotal  危险函数总数
    * unsafeFunctionsKloc  危险函数密度
    * redundantCodeTotal  冗余代码数
    * redundantCodeKloc  冗余代码块密度
    * warningSuppressionTotal  抑制告警数
    * warningSuppressionKloc  抑制告警密度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codeSize' => null,
        'rawLines' => null,
        'methodsTotal' => null,
        'cyclomaticComplexityTotal' => null,
        'cyclomaticComplexityPerMethod' => null,
        'maximumCyclomaticComplexity' => null,
        'hugeCyclomaticComplexityTotal' => null,
        'hugeCyclomaticComplexityRatio' => null,
        'ccaCyclomaticComplexityTotal' => null,
        'ccaCyclomaticComplexityPerMethod' => null,
        'maximumCcaCyclomaticComplexity' => null,
        'hugeCcaCyclomaticComplexityTotal' => null,
        'cyclomaticComplexityAdequacy' => null,
        'maximumDepth' => null,
        'hugeDepthTotal' => null,
        'hugeDepthRatio' => null,
        'methodLines' => null,
        'linesPerMethod' => null,
        'hugeMethodTotal' => null,
        'hugeMethodRatio' => null,
        'filesTotal' => null,
        'foldersTotal' => null,
        'linesPerFile' => null,
        'hugeHeaderfileTotal' => null,
        'hugeHeaderfileRatio' => null,
        'hugeNonHeaderfileTotal' => null,
        'hugeNonHeaderfileRatio' => null,
        'hugeFolderTotal' => null,
        'hugeFolderRatio' => null,
        'fileDuplicationTotal' => null,
        'fileDuplicationRatio' => null,
        'nonHfileDuplicationTotal' => null,
        'nonHfileDuplicationRatio' => null,
        'codeDuplicationTotal' => null,
        'codeDuplicationRatio' => null,
        'nonHfileCodeDuplicationTotal' => null,
        'nonHfileCodeDuplicationRatio' => null,
        'unsafeFunctionsTotal' => null,
        'unsafeFunctionsKloc' => null,
        'redundantCodeTotal' => null,
        'redundantCodeKloc' => null,
        'warningSuppressionTotal' => null,
        'warningSuppressionKloc' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * codeSize  代码规模
    * rawLines  原始代码行数
    * methodsTotal  函数总数
    * cyclomaticComplexityTotal  圈复杂度总数
    * cyclomaticComplexityPerMethod  平均圈复杂度
    * maximumCyclomaticComplexity  最大圈复杂度
    * hugeCyclomaticComplexityTotal  超大圈复杂度数
    * hugeCyclomaticComplexityRatio  超大圈复杂度比例
    * ccaCyclomaticComplexityTotal  cca圈复杂度总数
    * ccaCyclomaticComplexityPerMethod  cca平均圈复杂度
    * maximumCcaCyclomaticComplexity  cca最大圈复杂度
    * hugeCcaCyclomaticComplexityTotal  超大圈复杂度函数总数
    * cyclomaticComplexityAdequacy  圈复杂度满足度
    * maximumDepth  最大深度
    * hugeDepthTotal  超大深度数
    * hugeDepthRatio  超大深度占比
    * methodLines  函数总行数
    * linesPerMethod  函数平均代码行
    * hugeMethodTotal  超大函数数
    * hugeMethodRatio  超大函数占比
    * filesTotal  文件总数
    * foldersTotal  目录总数
    * linesPerFile  文件平均代码行
    * hugeHeaderfileTotal  超大头文件数
    * hugeHeaderfileRatio  超大头文件占比
    * hugeNonHeaderfileTotal  超大源文件数
    * hugeNonHeaderfileRatio  超大源文件占比
    * hugeFolderTotal  超大目录数
    * hugeFolderRatio  超大目录占比
    * fileDuplicationTotal  重复文件数
    * fileDuplicationRatio  文件重复率
    * nonHfileDuplicationTotal  重复源文件数
    * nonHfileDuplicationRatio  源文件重复率
    * codeDuplicationTotal  代码重复数
    * codeDuplicationRatio  代码重复率
    * nonHfileCodeDuplicationTotal  源文件代码重复数
    * nonHfileCodeDuplicationRatio  源文件代码重复率
    * unsafeFunctionsTotal  危险函数总数
    * unsafeFunctionsKloc  危险函数密度
    * redundantCodeTotal  冗余代码数
    * redundantCodeKloc  冗余代码块密度
    * warningSuppressionTotal  抑制告警数
    * warningSuppressionKloc  抑制告警密度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codeSize' => 'code_size',
            'rawLines' => 'raw_lines',
            'methodsTotal' => 'methods_total',
            'cyclomaticComplexityTotal' => 'cyclomatic_complexity_total',
            'cyclomaticComplexityPerMethod' => 'cyclomatic_complexity_per_method',
            'maximumCyclomaticComplexity' => 'maximum_cyclomatic_complexity',
            'hugeCyclomaticComplexityTotal' => 'huge_cyclomatic_complexity_total',
            'hugeCyclomaticComplexityRatio' => 'huge_cyclomatic_complexity_ratio',
            'ccaCyclomaticComplexityTotal' => 'cca_cyclomatic_complexity_total',
            'ccaCyclomaticComplexityPerMethod' => 'cca_cyclomatic_complexity_per_method',
            'maximumCcaCyclomaticComplexity' => 'maximum_cca_cyclomatic_complexity',
            'hugeCcaCyclomaticComplexityTotal' => 'huge_cca_cyclomatic_complexity_total',
            'cyclomaticComplexityAdequacy' => 'cyclomatic_complexity_adequacy',
            'maximumDepth' => 'maximum_depth',
            'hugeDepthTotal' => 'huge_depth_total',
            'hugeDepthRatio' => 'huge_depth_ratio',
            'methodLines' => 'method_lines',
            'linesPerMethod' => 'lines_per_method',
            'hugeMethodTotal' => 'huge_method_total',
            'hugeMethodRatio' => 'huge_method_ratio',
            'filesTotal' => 'files_total',
            'foldersTotal' => 'folders_total',
            'linesPerFile' => 'lines_per_file',
            'hugeHeaderfileTotal' => 'huge_headerfile_total',
            'hugeHeaderfileRatio' => 'huge_headerfile_ratio',
            'hugeNonHeaderfileTotal' => 'huge_non_headerfile_total',
            'hugeNonHeaderfileRatio' => 'huge_non_headerfile_ratio',
            'hugeFolderTotal' => 'huge_folder_total',
            'hugeFolderRatio' => 'huge_folder_ratio',
            'fileDuplicationTotal' => 'file_duplication_total',
            'fileDuplicationRatio' => 'file_duplication_ratio',
            'nonHfileDuplicationTotal' => 'non_hfile_duplication_total',
            'nonHfileDuplicationRatio' => 'non_hfile_duplication_ratio',
            'codeDuplicationTotal' => 'code_duplication_total',
            'codeDuplicationRatio' => 'code_duplication_ratio',
            'nonHfileCodeDuplicationTotal' => 'non_hfile_code_duplication_total',
            'nonHfileCodeDuplicationRatio' => 'non_hfile_code_duplication_ratio',
            'unsafeFunctionsTotal' => 'unsafe_functions_total',
            'unsafeFunctionsKloc' => 'unsafe_functions_kloc',
            'redundantCodeTotal' => 'redundant_code_total',
            'redundantCodeKloc' => 'redundant_code_kloc',
            'warningSuppressionTotal' => 'warning_suppression_total',
            'warningSuppressionKloc' => 'warning_suppression_kloc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codeSize  代码规模
    * rawLines  原始代码行数
    * methodsTotal  函数总数
    * cyclomaticComplexityTotal  圈复杂度总数
    * cyclomaticComplexityPerMethod  平均圈复杂度
    * maximumCyclomaticComplexity  最大圈复杂度
    * hugeCyclomaticComplexityTotal  超大圈复杂度数
    * hugeCyclomaticComplexityRatio  超大圈复杂度比例
    * ccaCyclomaticComplexityTotal  cca圈复杂度总数
    * ccaCyclomaticComplexityPerMethod  cca平均圈复杂度
    * maximumCcaCyclomaticComplexity  cca最大圈复杂度
    * hugeCcaCyclomaticComplexityTotal  超大圈复杂度函数总数
    * cyclomaticComplexityAdequacy  圈复杂度满足度
    * maximumDepth  最大深度
    * hugeDepthTotal  超大深度数
    * hugeDepthRatio  超大深度占比
    * methodLines  函数总行数
    * linesPerMethod  函数平均代码行
    * hugeMethodTotal  超大函数数
    * hugeMethodRatio  超大函数占比
    * filesTotal  文件总数
    * foldersTotal  目录总数
    * linesPerFile  文件平均代码行
    * hugeHeaderfileTotal  超大头文件数
    * hugeHeaderfileRatio  超大头文件占比
    * hugeNonHeaderfileTotal  超大源文件数
    * hugeNonHeaderfileRatio  超大源文件占比
    * hugeFolderTotal  超大目录数
    * hugeFolderRatio  超大目录占比
    * fileDuplicationTotal  重复文件数
    * fileDuplicationRatio  文件重复率
    * nonHfileDuplicationTotal  重复源文件数
    * nonHfileDuplicationRatio  源文件重复率
    * codeDuplicationTotal  代码重复数
    * codeDuplicationRatio  代码重复率
    * nonHfileCodeDuplicationTotal  源文件代码重复数
    * nonHfileCodeDuplicationRatio  源文件代码重复率
    * unsafeFunctionsTotal  危险函数总数
    * unsafeFunctionsKloc  危险函数密度
    * redundantCodeTotal  冗余代码数
    * redundantCodeKloc  冗余代码块密度
    * warningSuppressionTotal  抑制告警数
    * warningSuppressionKloc  抑制告警密度
    *
    * @var string[]
    */
    protected static $setters = [
            'codeSize' => 'setCodeSize',
            'rawLines' => 'setRawLines',
            'methodsTotal' => 'setMethodsTotal',
            'cyclomaticComplexityTotal' => 'setCyclomaticComplexityTotal',
            'cyclomaticComplexityPerMethod' => 'setCyclomaticComplexityPerMethod',
            'maximumCyclomaticComplexity' => 'setMaximumCyclomaticComplexity',
            'hugeCyclomaticComplexityTotal' => 'setHugeCyclomaticComplexityTotal',
            'hugeCyclomaticComplexityRatio' => 'setHugeCyclomaticComplexityRatio',
            'ccaCyclomaticComplexityTotal' => 'setCcaCyclomaticComplexityTotal',
            'ccaCyclomaticComplexityPerMethod' => 'setCcaCyclomaticComplexityPerMethod',
            'maximumCcaCyclomaticComplexity' => 'setMaximumCcaCyclomaticComplexity',
            'hugeCcaCyclomaticComplexityTotal' => 'setHugeCcaCyclomaticComplexityTotal',
            'cyclomaticComplexityAdequacy' => 'setCyclomaticComplexityAdequacy',
            'maximumDepth' => 'setMaximumDepth',
            'hugeDepthTotal' => 'setHugeDepthTotal',
            'hugeDepthRatio' => 'setHugeDepthRatio',
            'methodLines' => 'setMethodLines',
            'linesPerMethod' => 'setLinesPerMethod',
            'hugeMethodTotal' => 'setHugeMethodTotal',
            'hugeMethodRatio' => 'setHugeMethodRatio',
            'filesTotal' => 'setFilesTotal',
            'foldersTotal' => 'setFoldersTotal',
            'linesPerFile' => 'setLinesPerFile',
            'hugeHeaderfileTotal' => 'setHugeHeaderfileTotal',
            'hugeHeaderfileRatio' => 'setHugeHeaderfileRatio',
            'hugeNonHeaderfileTotal' => 'setHugeNonHeaderfileTotal',
            'hugeNonHeaderfileRatio' => 'setHugeNonHeaderfileRatio',
            'hugeFolderTotal' => 'setHugeFolderTotal',
            'hugeFolderRatio' => 'setHugeFolderRatio',
            'fileDuplicationTotal' => 'setFileDuplicationTotal',
            'fileDuplicationRatio' => 'setFileDuplicationRatio',
            'nonHfileDuplicationTotal' => 'setNonHfileDuplicationTotal',
            'nonHfileDuplicationRatio' => 'setNonHfileDuplicationRatio',
            'codeDuplicationTotal' => 'setCodeDuplicationTotal',
            'codeDuplicationRatio' => 'setCodeDuplicationRatio',
            'nonHfileCodeDuplicationTotal' => 'setNonHfileCodeDuplicationTotal',
            'nonHfileCodeDuplicationRatio' => 'setNonHfileCodeDuplicationRatio',
            'unsafeFunctionsTotal' => 'setUnsafeFunctionsTotal',
            'unsafeFunctionsKloc' => 'setUnsafeFunctionsKloc',
            'redundantCodeTotal' => 'setRedundantCodeTotal',
            'redundantCodeKloc' => 'setRedundantCodeKloc',
            'warningSuppressionTotal' => 'setWarningSuppressionTotal',
            'warningSuppressionKloc' => 'setWarningSuppressionKloc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codeSize  代码规模
    * rawLines  原始代码行数
    * methodsTotal  函数总数
    * cyclomaticComplexityTotal  圈复杂度总数
    * cyclomaticComplexityPerMethod  平均圈复杂度
    * maximumCyclomaticComplexity  最大圈复杂度
    * hugeCyclomaticComplexityTotal  超大圈复杂度数
    * hugeCyclomaticComplexityRatio  超大圈复杂度比例
    * ccaCyclomaticComplexityTotal  cca圈复杂度总数
    * ccaCyclomaticComplexityPerMethod  cca平均圈复杂度
    * maximumCcaCyclomaticComplexity  cca最大圈复杂度
    * hugeCcaCyclomaticComplexityTotal  超大圈复杂度函数总数
    * cyclomaticComplexityAdequacy  圈复杂度满足度
    * maximumDepth  最大深度
    * hugeDepthTotal  超大深度数
    * hugeDepthRatio  超大深度占比
    * methodLines  函数总行数
    * linesPerMethod  函数平均代码行
    * hugeMethodTotal  超大函数数
    * hugeMethodRatio  超大函数占比
    * filesTotal  文件总数
    * foldersTotal  目录总数
    * linesPerFile  文件平均代码行
    * hugeHeaderfileTotal  超大头文件数
    * hugeHeaderfileRatio  超大头文件占比
    * hugeNonHeaderfileTotal  超大源文件数
    * hugeNonHeaderfileRatio  超大源文件占比
    * hugeFolderTotal  超大目录数
    * hugeFolderRatio  超大目录占比
    * fileDuplicationTotal  重复文件数
    * fileDuplicationRatio  文件重复率
    * nonHfileDuplicationTotal  重复源文件数
    * nonHfileDuplicationRatio  源文件重复率
    * codeDuplicationTotal  代码重复数
    * codeDuplicationRatio  代码重复率
    * nonHfileCodeDuplicationTotal  源文件代码重复数
    * nonHfileCodeDuplicationRatio  源文件代码重复率
    * unsafeFunctionsTotal  危险函数总数
    * unsafeFunctionsKloc  危险函数密度
    * redundantCodeTotal  冗余代码数
    * redundantCodeKloc  冗余代码块密度
    * warningSuppressionTotal  抑制告警数
    * warningSuppressionKloc  抑制告警密度
    *
    * @var string[]
    */
    protected static $getters = [
            'codeSize' => 'getCodeSize',
            'rawLines' => 'getRawLines',
            'methodsTotal' => 'getMethodsTotal',
            'cyclomaticComplexityTotal' => 'getCyclomaticComplexityTotal',
            'cyclomaticComplexityPerMethod' => 'getCyclomaticComplexityPerMethod',
            'maximumCyclomaticComplexity' => 'getMaximumCyclomaticComplexity',
            'hugeCyclomaticComplexityTotal' => 'getHugeCyclomaticComplexityTotal',
            'hugeCyclomaticComplexityRatio' => 'getHugeCyclomaticComplexityRatio',
            'ccaCyclomaticComplexityTotal' => 'getCcaCyclomaticComplexityTotal',
            'ccaCyclomaticComplexityPerMethod' => 'getCcaCyclomaticComplexityPerMethod',
            'maximumCcaCyclomaticComplexity' => 'getMaximumCcaCyclomaticComplexity',
            'hugeCcaCyclomaticComplexityTotal' => 'getHugeCcaCyclomaticComplexityTotal',
            'cyclomaticComplexityAdequacy' => 'getCyclomaticComplexityAdequacy',
            'maximumDepth' => 'getMaximumDepth',
            'hugeDepthTotal' => 'getHugeDepthTotal',
            'hugeDepthRatio' => 'getHugeDepthRatio',
            'methodLines' => 'getMethodLines',
            'linesPerMethod' => 'getLinesPerMethod',
            'hugeMethodTotal' => 'getHugeMethodTotal',
            'hugeMethodRatio' => 'getHugeMethodRatio',
            'filesTotal' => 'getFilesTotal',
            'foldersTotal' => 'getFoldersTotal',
            'linesPerFile' => 'getLinesPerFile',
            'hugeHeaderfileTotal' => 'getHugeHeaderfileTotal',
            'hugeHeaderfileRatio' => 'getHugeHeaderfileRatio',
            'hugeNonHeaderfileTotal' => 'getHugeNonHeaderfileTotal',
            'hugeNonHeaderfileRatio' => 'getHugeNonHeaderfileRatio',
            'hugeFolderTotal' => 'getHugeFolderTotal',
            'hugeFolderRatio' => 'getHugeFolderRatio',
            'fileDuplicationTotal' => 'getFileDuplicationTotal',
            'fileDuplicationRatio' => 'getFileDuplicationRatio',
            'nonHfileDuplicationTotal' => 'getNonHfileDuplicationTotal',
            'nonHfileDuplicationRatio' => 'getNonHfileDuplicationRatio',
            'codeDuplicationTotal' => 'getCodeDuplicationTotal',
            'codeDuplicationRatio' => 'getCodeDuplicationRatio',
            'nonHfileCodeDuplicationTotal' => 'getNonHfileCodeDuplicationTotal',
            'nonHfileCodeDuplicationRatio' => 'getNonHfileCodeDuplicationRatio',
            'unsafeFunctionsTotal' => 'getUnsafeFunctionsTotal',
            'unsafeFunctionsKloc' => 'getUnsafeFunctionsKloc',
            'redundantCodeTotal' => 'getRedundantCodeTotal',
            'redundantCodeKloc' => 'getRedundantCodeKloc',
            'warningSuppressionTotal' => 'getWarningSuppressionTotal',
            'warningSuppressionKloc' => 'getWarningSuppressionKloc'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['codeSize'] = isset($data['codeSize']) ? $data['codeSize'] : null;
        $this->container['rawLines'] = isset($data['rawLines']) ? $data['rawLines'] : null;
        $this->container['methodsTotal'] = isset($data['methodsTotal']) ? $data['methodsTotal'] : null;
        $this->container['cyclomaticComplexityTotal'] = isset($data['cyclomaticComplexityTotal']) ? $data['cyclomaticComplexityTotal'] : null;
        $this->container['cyclomaticComplexityPerMethod'] = isset($data['cyclomaticComplexityPerMethod']) ? $data['cyclomaticComplexityPerMethod'] : null;
        $this->container['maximumCyclomaticComplexity'] = isset($data['maximumCyclomaticComplexity']) ? $data['maximumCyclomaticComplexity'] : null;
        $this->container['hugeCyclomaticComplexityTotal'] = isset($data['hugeCyclomaticComplexityTotal']) ? $data['hugeCyclomaticComplexityTotal'] : null;
        $this->container['hugeCyclomaticComplexityRatio'] = isset($data['hugeCyclomaticComplexityRatio']) ? $data['hugeCyclomaticComplexityRatio'] : null;
        $this->container['ccaCyclomaticComplexityTotal'] = isset($data['ccaCyclomaticComplexityTotal']) ? $data['ccaCyclomaticComplexityTotal'] : null;
        $this->container['ccaCyclomaticComplexityPerMethod'] = isset($data['ccaCyclomaticComplexityPerMethod']) ? $data['ccaCyclomaticComplexityPerMethod'] : null;
        $this->container['maximumCcaCyclomaticComplexity'] = isset($data['maximumCcaCyclomaticComplexity']) ? $data['maximumCcaCyclomaticComplexity'] : null;
        $this->container['hugeCcaCyclomaticComplexityTotal'] = isset($data['hugeCcaCyclomaticComplexityTotal']) ? $data['hugeCcaCyclomaticComplexityTotal'] : null;
        $this->container['cyclomaticComplexityAdequacy'] = isset($data['cyclomaticComplexityAdequacy']) ? $data['cyclomaticComplexityAdequacy'] : null;
        $this->container['maximumDepth'] = isset($data['maximumDepth']) ? $data['maximumDepth'] : null;
        $this->container['hugeDepthTotal'] = isset($data['hugeDepthTotal']) ? $data['hugeDepthTotal'] : null;
        $this->container['hugeDepthRatio'] = isset($data['hugeDepthRatio']) ? $data['hugeDepthRatio'] : null;
        $this->container['methodLines'] = isset($data['methodLines']) ? $data['methodLines'] : null;
        $this->container['linesPerMethod'] = isset($data['linesPerMethod']) ? $data['linesPerMethod'] : null;
        $this->container['hugeMethodTotal'] = isset($data['hugeMethodTotal']) ? $data['hugeMethodTotal'] : null;
        $this->container['hugeMethodRatio'] = isset($data['hugeMethodRatio']) ? $data['hugeMethodRatio'] : null;
        $this->container['filesTotal'] = isset($data['filesTotal']) ? $data['filesTotal'] : null;
        $this->container['foldersTotal'] = isset($data['foldersTotal']) ? $data['foldersTotal'] : null;
        $this->container['linesPerFile'] = isset($data['linesPerFile']) ? $data['linesPerFile'] : null;
        $this->container['hugeHeaderfileTotal'] = isset($data['hugeHeaderfileTotal']) ? $data['hugeHeaderfileTotal'] : null;
        $this->container['hugeHeaderfileRatio'] = isset($data['hugeHeaderfileRatio']) ? $data['hugeHeaderfileRatio'] : null;
        $this->container['hugeNonHeaderfileTotal'] = isset($data['hugeNonHeaderfileTotal']) ? $data['hugeNonHeaderfileTotal'] : null;
        $this->container['hugeNonHeaderfileRatio'] = isset($data['hugeNonHeaderfileRatio']) ? $data['hugeNonHeaderfileRatio'] : null;
        $this->container['hugeFolderTotal'] = isset($data['hugeFolderTotal']) ? $data['hugeFolderTotal'] : null;
        $this->container['hugeFolderRatio'] = isset($data['hugeFolderRatio']) ? $data['hugeFolderRatio'] : null;
        $this->container['fileDuplicationTotal'] = isset($data['fileDuplicationTotal']) ? $data['fileDuplicationTotal'] : null;
        $this->container['fileDuplicationRatio'] = isset($data['fileDuplicationRatio']) ? $data['fileDuplicationRatio'] : null;
        $this->container['nonHfileDuplicationTotal'] = isset($data['nonHfileDuplicationTotal']) ? $data['nonHfileDuplicationTotal'] : null;
        $this->container['nonHfileDuplicationRatio'] = isset($data['nonHfileDuplicationRatio']) ? $data['nonHfileDuplicationRatio'] : null;
        $this->container['codeDuplicationTotal'] = isset($data['codeDuplicationTotal']) ? $data['codeDuplicationTotal'] : null;
        $this->container['codeDuplicationRatio'] = isset($data['codeDuplicationRatio']) ? $data['codeDuplicationRatio'] : null;
        $this->container['nonHfileCodeDuplicationTotal'] = isset($data['nonHfileCodeDuplicationTotal']) ? $data['nonHfileCodeDuplicationTotal'] : null;
        $this->container['nonHfileCodeDuplicationRatio'] = isset($data['nonHfileCodeDuplicationRatio']) ? $data['nonHfileCodeDuplicationRatio'] : null;
        $this->container['unsafeFunctionsTotal'] = isset($data['unsafeFunctionsTotal']) ? $data['unsafeFunctionsTotal'] : null;
        $this->container['unsafeFunctionsKloc'] = isset($data['unsafeFunctionsKloc']) ? $data['unsafeFunctionsKloc'] : null;
        $this->container['redundantCodeTotal'] = isset($data['redundantCodeTotal']) ? $data['redundantCodeTotal'] : null;
        $this->container['redundantCodeKloc'] = isset($data['redundantCodeKloc']) ? $data['redundantCodeKloc'] : null;
        $this->container['warningSuppressionTotal'] = isset($data['warningSuppressionTotal']) ? $data['warningSuppressionTotal'] : null;
        $this->container['warningSuppressionKloc'] = isset($data['warningSuppressionKloc']) ? $data['warningSuppressionKloc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets codeSize
    *  代码规模
    *
    * @return string|null
    */
    public function getCodeSize()
    {
        return $this->container['codeSize'];
    }

    /**
    * Sets codeSize
    *
    * @param string|null $codeSize 代码规模
    *
    * @return $this
    */
    public function setCodeSize($codeSize)
    {
        $this->container['codeSize'] = $codeSize;
        return $this;
    }

    /**
    * Gets rawLines
    *  原始代码行数
    *
    * @return string|null
    */
    public function getRawLines()
    {
        return $this->container['rawLines'];
    }

    /**
    * Sets rawLines
    *
    * @param string|null $rawLines 原始代码行数
    *
    * @return $this
    */
    public function setRawLines($rawLines)
    {
        $this->container['rawLines'] = $rawLines;
        return $this;
    }

    /**
    * Gets methodsTotal
    *  函数总数
    *
    * @return string|null
    */
    public function getMethodsTotal()
    {
        return $this->container['methodsTotal'];
    }

    /**
    * Sets methodsTotal
    *
    * @param string|null $methodsTotal 函数总数
    *
    * @return $this
    */
    public function setMethodsTotal($methodsTotal)
    {
        $this->container['methodsTotal'] = $methodsTotal;
        return $this;
    }

    /**
    * Gets cyclomaticComplexityTotal
    *  圈复杂度总数
    *
    * @return string|null
    */
    public function getCyclomaticComplexityTotal()
    {
        return $this->container['cyclomaticComplexityTotal'];
    }

    /**
    * Sets cyclomaticComplexityTotal
    *
    * @param string|null $cyclomaticComplexityTotal 圈复杂度总数
    *
    * @return $this
    */
    public function setCyclomaticComplexityTotal($cyclomaticComplexityTotal)
    {
        $this->container['cyclomaticComplexityTotal'] = $cyclomaticComplexityTotal;
        return $this;
    }

    /**
    * Gets cyclomaticComplexityPerMethod
    *  平均圈复杂度
    *
    * @return string|null
    */
    public function getCyclomaticComplexityPerMethod()
    {
        return $this->container['cyclomaticComplexityPerMethod'];
    }

    /**
    * Sets cyclomaticComplexityPerMethod
    *
    * @param string|null $cyclomaticComplexityPerMethod 平均圈复杂度
    *
    * @return $this
    */
    public function setCyclomaticComplexityPerMethod($cyclomaticComplexityPerMethod)
    {
        $this->container['cyclomaticComplexityPerMethod'] = $cyclomaticComplexityPerMethod;
        return $this;
    }

    /**
    * Gets maximumCyclomaticComplexity
    *  最大圈复杂度
    *
    * @return string|null
    */
    public function getMaximumCyclomaticComplexity()
    {
        return $this->container['maximumCyclomaticComplexity'];
    }

    /**
    * Sets maximumCyclomaticComplexity
    *
    * @param string|null $maximumCyclomaticComplexity 最大圈复杂度
    *
    * @return $this
    */
    public function setMaximumCyclomaticComplexity($maximumCyclomaticComplexity)
    {
        $this->container['maximumCyclomaticComplexity'] = $maximumCyclomaticComplexity;
        return $this;
    }

    /**
    * Gets hugeCyclomaticComplexityTotal
    *  超大圈复杂度数
    *
    * @return string|null
    */
    public function getHugeCyclomaticComplexityTotal()
    {
        return $this->container['hugeCyclomaticComplexityTotal'];
    }

    /**
    * Sets hugeCyclomaticComplexityTotal
    *
    * @param string|null $hugeCyclomaticComplexityTotal 超大圈复杂度数
    *
    * @return $this
    */
    public function setHugeCyclomaticComplexityTotal($hugeCyclomaticComplexityTotal)
    {
        $this->container['hugeCyclomaticComplexityTotal'] = $hugeCyclomaticComplexityTotal;
        return $this;
    }

    /**
    * Gets hugeCyclomaticComplexityRatio
    *  超大圈复杂度比例
    *
    * @return string|null
    */
    public function getHugeCyclomaticComplexityRatio()
    {
        return $this->container['hugeCyclomaticComplexityRatio'];
    }

    /**
    * Sets hugeCyclomaticComplexityRatio
    *
    * @param string|null $hugeCyclomaticComplexityRatio 超大圈复杂度比例
    *
    * @return $this
    */
    public function setHugeCyclomaticComplexityRatio($hugeCyclomaticComplexityRatio)
    {
        $this->container['hugeCyclomaticComplexityRatio'] = $hugeCyclomaticComplexityRatio;
        return $this;
    }

    /**
    * Gets ccaCyclomaticComplexityTotal
    *  cca圈复杂度总数
    *
    * @return string|null
    */
    public function getCcaCyclomaticComplexityTotal()
    {
        return $this->container['ccaCyclomaticComplexityTotal'];
    }

    /**
    * Sets ccaCyclomaticComplexityTotal
    *
    * @param string|null $ccaCyclomaticComplexityTotal cca圈复杂度总数
    *
    * @return $this
    */
    public function setCcaCyclomaticComplexityTotal($ccaCyclomaticComplexityTotal)
    {
        $this->container['ccaCyclomaticComplexityTotal'] = $ccaCyclomaticComplexityTotal;
        return $this;
    }

    /**
    * Gets ccaCyclomaticComplexityPerMethod
    *  cca平均圈复杂度
    *
    * @return string|null
    */
    public function getCcaCyclomaticComplexityPerMethod()
    {
        return $this->container['ccaCyclomaticComplexityPerMethod'];
    }

    /**
    * Sets ccaCyclomaticComplexityPerMethod
    *
    * @param string|null $ccaCyclomaticComplexityPerMethod cca平均圈复杂度
    *
    * @return $this
    */
    public function setCcaCyclomaticComplexityPerMethod($ccaCyclomaticComplexityPerMethod)
    {
        $this->container['ccaCyclomaticComplexityPerMethod'] = $ccaCyclomaticComplexityPerMethod;
        return $this;
    }

    /**
    * Gets maximumCcaCyclomaticComplexity
    *  cca最大圈复杂度
    *
    * @return string|null
    */
    public function getMaximumCcaCyclomaticComplexity()
    {
        return $this->container['maximumCcaCyclomaticComplexity'];
    }

    /**
    * Sets maximumCcaCyclomaticComplexity
    *
    * @param string|null $maximumCcaCyclomaticComplexity cca最大圈复杂度
    *
    * @return $this
    */
    public function setMaximumCcaCyclomaticComplexity($maximumCcaCyclomaticComplexity)
    {
        $this->container['maximumCcaCyclomaticComplexity'] = $maximumCcaCyclomaticComplexity;
        return $this;
    }

    /**
    * Gets hugeCcaCyclomaticComplexityTotal
    *  超大圈复杂度函数总数
    *
    * @return string|null
    */
    public function getHugeCcaCyclomaticComplexityTotal()
    {
        return $this->container['hugeCcaCyclomaticComplexityTotal'];
    }

    /**
    * Sets hugeCcaCyclomaticComplexityTotal
    *
    * @param string|null $hugeCcaCyclomaticComplexityTotal 超大圈复杂度函数总数
    *
    * @return $this
    */
    public function setHugeCcaCyclomaticComplexityTotal($hugeCcaCyclomaticComplexityTotal)
    {
        $this->container['hugeCcaCyclomaticComplexityTotal'] = $hugeCcaCyclomaticComplexityTotal;
        return $this;
    }

    /**
    * Gets cyclomaticComplexityAdequacy
    *  圈复杂度满足度
    *
    * @return string|null
    */
    public function getCyclomaticComplexityAdequacy()
    {
        return $this->container['cyclomaticComplexityAdequacy'];
    }

    /**
    * Sets cyclomaticComplexityAdequacy
    *
    * @param string|null $cyclomaticComplexityAdequacy 圈复杂度满足度
    *
    * @return $this
    */
    public function setCyclomaticComplexityAdequacy($cyclomaticComplexityAdequacy)
    {
        $this->container['cyclomaticComplexityAdequacy'] = $cyclomaticComplexityAdequacy;
        return $this;
    }

    /**
    * Gets maximumDepth
    *  最大深度
    *
    * @return string|null
    */
    public function getMaximumDepth()
    {
        return $this->container['maximumDepth'];
    }

    /**
    * Sets maximumDepth
    *
    * @param string|null $maximumDepth 最大深度
    *
    * @return $this
    */
    public function setMaximumDepth($maximumDepth)
    {
        $this->container['maximumDepth'] = $maximumDepth;
        return $this;
    }

    /**
    * Gets hugeDepthTotal
    *  超大深度数
    *
    * @return string|null
    */
    public function getHugeDepthTotal()
    {
        return $this->container['hugeDepthTotal'];
    }

    /**
    * Sets hugeDepthTotal
    *
    * @param string|null $hugeDepthTotal 超大深度数
    *
    * @return $this
    */
    public function setHugeDepthTotal($hugeDepthTotal)
    {
        $this->container['hugeDepthTotal'] = $hugeDepthTotal;
        return $this;
    }

    /**
    * Gets hugeDepthRatio
    *  超大深度占比
    *
    * @return string|null
    */
    public function getHugeDepthRatio()
    {
        return $this->container['hugeDepthRatio'];
    }

    /**
    * Sets hugeDepthRatio
    *
    * @param string|null $hugeDepthRatio 超大深度占比
    *
    * @return $this
    */
    public function setHugeDepthRatio($hugeDepthRatio)
    {
        $this->container['hugeDepthRatio'] = $hugeDepthRatio;
        return $this;
    }

    /**
    * Gets methodLines
    *  函数总行数
    *
    * @return string|null
    */
    public function getMethodLines()
    {
        return $this->container['methodLines'];
    }

    /**
    * Sets methodLines
    *
    * @param string|null $methodLines 函数总行数
    *
    * @return $this
    */
    public function setMethodLines($methodLines)
    {
        $this->container['methodLines'] = $methodLines;
        return $this;
    }

    /**
    * Gets linesPerMethod
    *  函数平均代码行
    *
    * @return string|null
    */
    public function getLinesPerMethod()
    {
        return $this->container['linesPerMethod'];
    }

    /**
    * Sets linesPerMethod
    *
    * @param string|null $linesPerMethod 函数平均代码行
    *
    * @return $this
    */
    public function setLinesPerMethod($linesPerMethod)
    {
        $this->container['linesPerMethod'] = $linesPerMethod;
        return $this;
    }

    /**
    * Gets hugeMethodTotal
    *  超大函数数
    *
    * @return string|null
    */
    public function getHugeMethodTotal()
    {
        return $this->container['hugeMethodTotal'];
    }

    /**
    * Sets hugeMethodTotal
    *
    * @param string|null $hugeMethodTotal 超大函数数
    *
    * @return $this
    */
    public function setHugeMethodTotal($hugeMethodTotal)
    {
        $this->container['hugeMethodTotal'] = $hugeMethodTotal;
        return $this;
    }

    /**
    * Gets hugeMethodRatio
    *  超大函数占比
    *
    * @return string|null
    */
    public function getHugeMethodRatio()
    {
        return $this->container['hugeMethodRatio'];
    }

    /**
    * Sets hugeMethodRatio
    *
    * @param string|null $hugeMethodRatio 超大函数占比
    *
    * @return $this
    */
    public function setHugeMethodRatio($hugeMethodRatio)
    {
        $this->container['hugeMethodRatio'] = $hugeMethodRatio;
        return $this;
    }

    /**
    * Gets filesTotal
    *  文件总数
    *
    * @return string|null
    */
    public function getFilesTotal()
    {
        return $this->container['filesTotal'];
    }

    /**
    * Sets filesTotal
    *
    * @param string|null $filesTotal 文件总数
    *
    * @return $this
    */
    public function setFilesTotal($filesTotal)
    {
        $this->container['filesTotal'] = $filesTotal;
        return $this;
    }

    /**
    * Gets foldersTotal
    *  目录总数
    *
    * @return string|null
    */
    public function getFoldersTotal()
    {
        return $this->container['foldersTotal'];
    }

    /**
    * Sets foldersTotal
    *
    * @param string|null $foldersTotal 目录总数
    *
    * @return $this
    */
    public function setFoldersTotal($foldersTotal)
    {
        $this->container['foldersTotal'] = $foldersTotal;
        return $this;
    }

    /**
    * Gets linesPerFile
    *  文件平均代码行
    *
    * @return string|null
    */
    public function getLinesPerFile()
    {
        return $this->container['linesPerFile'];
    }

    /**
    * Sets linesPerFile
    *
    * @param string|null $linesPerFile 文件平均代码行
    *
    * @return $this
    */
    public function setLinesPerFile($linesPerFile)
    {
        $this->container['linesPerFile'] = $linesPerFile;
        return $this;
    }

    /**
    * Gets hugeHeaderfileTotal
    *  超大头文件数
    *
    * @return string|null
    */
    public function getHugeHeaderfileTotal()
    {
        return $this->container['hugeHeaderfileTotal'];
    }

    /**
    * Sets hugeHeaderfileTotal
    *
    * @param string|null $hugeHeaderfileTotal 超大头文件数
    *
    * @return $this
    */
    public function setHugeHeaderfileTotal($hugeHeaderfileTotal)
    {
        $this->container['hugeHeaderfileTotal'] = $hugeHeaderfileTotal;
        return $this;
    }

    /**
    * Gets hugeHeaderfileRatio
    *  超大头文件占比
    *
    * @return string|null
    */
    public function getHugeHeaderfileRatio()
    {
        return $this->container['hugeHeaderfileRatio'];
    }

    /**
    * Sets hugeHeaderfileRatio
    *
    * @param string|null $hugeHeaderfileRatio 超大头文件占比
    *
    * @return $this
    */
    public function setHugeHeaderfileRatio($hugeHeaderfileRatio)
    {
        $this->container['hugeHeaderfileRatio'] = $hugeHeaderfileRatio;
        return $this;
    }

    /**
    * Gets hugeNonHeaderfileTotal
    *  超大源文件数
    *
    * @return string|null
    */
    public function getHugeNonHeaderfileTotal()
    {
        return $this->container['hugeNonHeaderfileTotal'];
    }

    /**
    * Sets hugeNonHeaderfileTotal
    *
    * @param string|null $hugeNonHeaderfileTotal 超大源文件数
    *
    * @return $this
    */
    public function setHugeNonHeaderfileTotal($hugeNonHeaderfileTotal)
    {
        $this->container['hugeNonHeaderfileTotal'] = $hugeNonHeaderfileTotal;
        return $this;
    }

    /**
    * Gets hugeNonHeaderfileRatio
    *  超大源文件占比
    *
    * @return string|null
    */
    public function getHugeNonHeaderfileRatio()
    {
        return $this->container['hugeNonHeaderfileRatio'];
    }

    /**
    * Sets hugeNonHeaderfileRatio
    *
    * @param string|null $hugeNonHeaderfileRatio 超大源文件占比
    *
    * @return $this
    */
    public function setHugeNonHeaderfileRatio($hugeNonHeaderfileRatio)
    {
        $this->container['hugeNonHeaderfileRatio'] = $hugeNonHeaderfileRatio;
        return $this;
    }

    /**
    * Gets hugeFolderTotal
    *  超大目录数
    *
    * @return string|null
    */
    public function getHugeFolderTotal()
    {
        return $this->container['hugeFolderTotal'];
    }

    /**
    * Sets hugeFolderTotal
    *
    * @param string|null $hugeFolderTotal 超大目录数
    *
    * @return $this
    */
    public function setHugeFolderTotal($hugeFolderTotal)
    {
        $this->container['hugeFolderTotal'] = $hugeFolderTotal;
        return $this;
    }

    /**
    * Gets hugeFolderRatio
    *  超大目录占比
    *
    * @return string|null
    */
    public function getHugeFolderRatio()
    {
        return $this->container['hugeFolderRatio'];
    }

    /**
    * Sets hugeFolderRatio
    *
    * @param string|null $hugeFolderRatio 超大目录占比
    *
    * @return $this
    */
    public function setHugeFolderRatio($hugeFolderRatio)
    {
        $this->container['hugeFolderRatio'] = $hugeFolderRatio;
        return $this;
    }

    /**
    * Gets fileDuplicationTotal
    *  重复文件数
    *
    * @return string|null
    */
    public function getFileDuplicationTotal()
    {
        return $this->container['fileDuplicationTotal'];
    }

    /**
    * Sets fileDuplicationTotal
    *
    * @param string|null $fileDuplicationTotal 重复文件数
    *
    * @return $this
    */
    public function setFileDuplicationTotal($fileDuplicationTotal)
    {
        $this->container['fileDuplicationTotal'] = $fileDuplicationTotal;
        return $this;
    }

    /**
    * Gets fileDuplicationRatio
    *  文件重复率
    *
    * @return string|null
    */
    public function getFileDuplicationRatio()
    {
        return $this->container['fileDuplicationRatio'];
    }

    /**
    * Sets fileDuplicationRatio
    *
    * @param string|null $fileDuplicationRatio 文件重复率
    *
    * @return $this
    */
    public function setFileDuplicationRatio($fileDuplicationRatio)
    {
        $this->container['fileDuplicationRatio'] = $fileDuplicationRatio;
        return $this;
    }

    /**
    * Gets nonHfileDuplicationTotal
    *  重复源文件数
    *
    * @return string|null
    */
    public function getNonHfileDuplicationTotal()
    {
        return $this->container['nonHfileDuplicationTotal'];
    }

    /**
    * Sets nonHfileDuplicationTotal
    *
    * @param string|null $nonHfileDuplicationTotal 重复源文件数
    *
    * @return $this
    */
    public function setNonHfileDuplicationTotal($nonHfileDuplicationTotal)
    {
        $this->container['nonHfileDuplicationTotal'] = $nonHfileDuplicationTotal;
        return $this;
    }

    /**
    * Gets nonHfileDuplicationRatio
    *  源文件重复率
    *
    * @return string|null
    */
    public function getNonHfileDuplicationRatio()
    {
        return $this->container['nonHfileDuplicationRatio'];
    }

    /**
    * Sets nonHfileDuplicationRatio
    *
    * @param string|null $nonHfileDuplicationRatio 源文件重复率
    *
    * @return $this
    */
    public function setNonHfileDuplicationRatio($nonHfileDuplicationRatio)
    {
        $this->container['nonHfileDuplicationRatio'] = $nonHfileDuplicationRatio;
        return $this;
    }

    /**
    * Gets codeDuplicationTotal
    *  代码重复数
    *
    * @return string|null
    */
    public function getCodeDuplicationTotal()
    {
        return $this->container['codeDuplicationTotal'];
    }

    /**
    * Sets codeDuplicationTotal
    *
    * @param string|null $codeDuplicationTotal 代码重复数
    *
    * @return $this
    */
    public function setCodeDuplicationTotal($codeDuplicationTotal)
    {
        $this->container['codeDuplicationTotal'] = $codeDuplicationTotal;
        return $this;
    }

    /**
    * Gets codeDuplicationRatio
    *  代码重复率
    *
    * @return string|null
    */
    public function getCodeDuplicationRatio()
    {
        return $this->container['codeDuplicationRatio'];
    }

    /**
    * Sets codeDuplicationRatio
    *
    * @param string|null $codeDuplicationRatio 代码重复率
    *
    * @return $this
    */
    public function setCodeDuplicationRatio($codeDuplicationRatio)
    {
        $this->container['codeDuplicationRatio'] = $codeDuplicationRatio;
        return $this;
    }

    /**
    * Gets nonHfileCodeDuplicationTotal
    *  源文件代码重复数
    *
    * @return string|null
    */
    public function getNonHfileCodeDuplicationTotal()
    {
        return $this->container['nonHfileCodeDuplicationTotal'];
    }

    /**
    * Sets nonHfileCodeDuplicationTotal
    *
    * @param string|null $nonHfileCodeDuplicationTotal 源文件代码重复数
    *
    * @return $this
    */
    public function setNonHfileCodeDuplicationTotal($nonHfileCodeDuplicationTotal)
    {
        $this->container['nonHfileCodeDuplicationTotal'] = $nonHfileCodeDuplicationTotal;
        return $this;
    }

    /**
    * Gets nonHfileCodeDuplicationRatio
    *  源文件代码重复率
    *
    * @return string|null
    */
    public function getNonHfileCodeDuplicationRatio()
    {
        return $this->container['nonHfileCodeDuplicationRatio'];
    }

    /**
    * Sets nonHfileCodeDuplicationRatio
    *
    * @param string|null $nonHfileCodeDuplicationRatio 源文件代码重复率
    *
    * @return $this
    */
    public function setNonHfileCodeDuplicationRatio($nonHfileCodeDuplicationRatio)
    {
        $this->container['nonHfileCodeDuplicationRatio'] = $nonHfileCodeDuplicationRatio;
        return $this;
    }

    /**
    * Gets unsafeFunctionsTotal
    *  危险函数总数
    *
    * @return string|null
    */
    public function getUnsafeFunctionsTotal()
    {
        return $this->container['unsafeFunctionsTotal'];
    }

    /**
    * Sets unsafeFunctionsTotal
    *
    * @param string|null $unsafeFunctionsTotal 危险函数总数
    *
    * @return $this
    */
    public function setUnsafeFunctionsTotal($unsafeFunctionsTotal)
    {
        $this->container['unsafeFunctionsTotal'] = $unsafeFunctionsTotal;
        return $this;
    }

    /**
    * Gets unsafeFunctionsKloc
    *  危险函数密度
    *
    * @return string|null
    */
    public function getUnsafeFunctionsKloc()
    {
        return $this->container['unsafeFunctionsKloc'];
    }

    /**
    * Sets unsafeFunctionsKloc
    *
    * @param string|null $unsafeFunctionsKloc 危险函数密度
    *
    * @return $this
    */
    public function setUnsafeFunctionsKloc($unsafeFunctionsKloc)
    {
        $this->container['unsafeFunctionsKloc'] = $unsafeFunctionsKloc;
        return $this;
    }

    /**
    * Gets redundantCodeTotal
    *  冗余代码数
    *
    * @return string|null
    */
    public function getRedundantCodeTotal()
    {
        return $this->container['redundantCodeTotal'];
    }

    /**
    * Sets redundantCodeTotal
    *
    * @param string|null $redundantCodeTotal 冗余代码数
    *
    * @return $this
    */
    public function setRedundantCodeTotal($redundantCodeTotal)
    {
        $this->container['redundantCodeTotal'] = $redundantCodeTotal;
        return $this;
    }

    /**
    * Gets redundantCodeKloc
    *  冗余代码块密度
    *
    * @return string|null
    */
    public function getRedundantCodeKloc()
    {
        return $this->container['redundantCodeKloc'];
    }

    /**
    * Sets redundantCodeKloc
    *
    * @param string|null $redundantCodeKloc 冗余代码块密度
    *
    * @return $this
    */
    public function setRedundantCodeKloc($redundantCodeKloc)
    {
        $this->container['redundantCodeKloc'] = $redundantCodeKloc;
        return $this;
    }

    /**
    * Gets warningSuppressionTotal
    *  抑制告警数
    *
    * @return string|null
    */
    public function getWarningSuppressionTotal()
    {
        return $this->container['warningSuppressionTotal'];
    }

    /**
    * Sets warningSuppressionTotal
    *
    * @param string|null $warningSuppressionTotal 抑制告警数
    *
    * @return $this
    */
    public function setWarningSuppressionTotal($warningSuppressionTotal)
    {
        $this->container['warningSuppressionTotal'] = $warningSuppressionTotal;
        return $this;
    }

    /**
    * Gets warningSuppressionKloc
    *  抑制告警密度
    *
    * @return string|null
    */
    public function getWarningSuppressionKloc()
    {
        return $this->container['warningSuppressionKloc'];
    }

    /**
    * Sets warningSuppressionKloc
    *
    * @param string|null $warningSuppressionKloc 抑制告警密度
    *
    * @return $this
    */
    public function setWarningSuppressionKloc($warningSuppressionKloc)
    {
        $this->container['warningSuppressionKloc'] = $warningSuppressionKloc;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

