<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportTableSpaceNewStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportTableSpaceNewStat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseTopResp  top库列表。
    * tableTopResp  top表列表。
    * rapidGrowthTablesResp  异常增长表列表。
    * noPrimaryTablesResp  无主键表列表。
    * noIndexTablesResp  无索引表列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseTopResp' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpaceTopResp[]',
            'tableTopResp' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpaceTopResp[]',
            'rapidGrowthTablesResp' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQueryRapidGrowthTablesResp[]',
            'noPrimaryTablesResp' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpecialTablesResp[]',
            'noIndexTablesResp' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpecialTablesResp[]',
            'analyzeSuccess' => 'bool',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseTopResp  top库列表。
    * tableTopResp  top表列表。
    * rapidGrowthTablesResp  异常增长表列表。
    * noPrimaryTablesResp  无主键表列表。
    * noIndexTablesResp  无索引表列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseTopResp' => null,
        'tableTopResp' => null,
        'rapidGrowthTablesResp' => null,
        'noPrimaryTablesResp' => null,
        'noIndexTablesResp' => null,
        'analyzeSuccess' => null,
        'errorMessage' => null
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
    * databaseTopResp  top库列表。
    * tableTopResp  top表列表。
    * rapidGrowthTablesResp  异常增长表列表。
    * noPrimaryTablesResp  无主键表列表。
    * noIndexTablesResp  无索引表列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseTopResp' => 'database_top_resp',
            'tableTopResp' => 'table_top_resp',
            'rapidGrowthTablesResp' => 'rapid_growth_tables_resp',
            'noPrimaryTablesResp' => 'no_primary_tables_resp',
            'noIndexTablesResp' => 'no_index_tables_resp',
            'analyzeSuccess' => 'analyze_success',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseTopResp  top库列表。
    * tableTopResp  top表列表。
    * rapidGrowthTablesResp  异常增长表列表。
    * noPrimaryTablesResp  无主键表列表。
    * noIndexTablesResp  无索引表列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseTopResp' => 'setDatabaseTopResp',
            'tableTopResp' => 'setTableTopResp',
            'rapidGrowthTablesResp' => 'setRapidGrowthTablesResp',
            'noPrimaryTablesResp' => 'setNoPrimaryTablesResp',
            'noIndexTablesResp' => 'setNoIndexTablesResp',
            'analyzeSuccess' => 'setAnalyzeSuccess',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseTopResp  top库列表。
    * tableTopResp  top表列表。
    * rapidGrowthTablesResp  异常增长表列表。
    * noPrimaryTablesResp  无主键表列表。
    * noIndexTablesResp  无索引表列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseTopResp' => 'getDatabaseTopResp',
            'tableTopResp' => 'getTableTopResp',
            'rapidGrowthTablesResp' => 'getRapidGrowthTablesResp',
            'noPrimaryTablesResp' => 'getNoPrimaryTablesResp',
            'noIndexTablesResp' => 'getNoIndexTablesResp',
            'analyzeSuccess' => 'getAnalyzeSuccess',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['databaseTopResp'] = isset($data['databaseTopResp']) ? $data['databaseTopResp'] : null;
        $this->container['tableTopResp'] = isset($data['tableTopResp']) ? $data['tableTopResp'] : null;
        $this->container['rapidGrowthTablesResp'] = isset($data['rapidGrowthTablesResp']) ? $data['rapidGrowthTablesResp'] : null;
        $this->container['noPrimaryTablesResp'] = isset($data['noPrimaryTablesResp']) ? $data['noPrimaryTablesResp'] : null;
        $this->container['noIndexTablesResp'] = isset($data['noIndexTablesResp']) ? $data['noIndexTablesResp'] : null;
        $this->container['analyzeSuccess'] = isset($data['analyzeSuccess']) ? $data['analyzeSuccess'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets databaseTopResp
    *  top库列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpaceTopResp[]|null
    */
    public function getDatabaseTopResp()
    {
        return $this->container['databaseTopResp'];
    }

    /**
    * Sets databaseTopResp
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpaceTopResp[]|null $databaseTopResp top库列表。
    *
    * @return $this
    */
    public function setDatabaseTopResp($databaseTopResp)
    {
        $this->container['databaseTopResp'] = $databaseTopResp;
        return $this;
    }

    /**
    * Gets tableTopResp
    *  top表列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpaceTopResp[]|null
    */
    public function getTableTopResp()
    {
        return $this->container['tableTopResp'];
    }

    /**
    * Sets tableTopResp
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpaceTopResp[]|null $tableTopResp top表列表。
    *
    * @return $this
    */
    public function setTableTopResp($tableTopResp)
    {
        $this->container['tableTopResp'] = $tableTopResp;
        return $this;
    }

    /**
    * Gets rapidGrowthTablesResp
    *  异常增长表列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQueryRapidGrowthTablesResp[]|null
    */
    public function getRapidGrowthTablesResp()
    {
        return $this->container['rapidGrowthTablesResp'];
    }

    /**
    * Sets rapidGrowthTablesResp
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQueryRapidGrowthTablesResp[]|null $rapidGrowthTablesResp 异常增长表列表。
    *
    * @return $this
    */
    public function setRapidGrowthTablesResp($rapidGrowthTablesResp)
    {
        $this->container['rapidGrowthTablesResp'] = $rapidGrowthTablesResp;
        return $this;
    }

    /**
    * Gets noPrimaryTablesResp
    *  无主键表列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpecialTablesResp[]|null
    */
    public function getNoPrimaryTablesResp()
    {
        return $this->container['noPrimaryTablesResp'];
    }

    /**
    * Sets noPrimaryTablesResp
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpecialTablesResp[]|null $noPrimaryTablesResp 无主键表列表。
    *
    * @return $this
    */
    public function setNoPrimaryTablesResp($noPrimaryTablesResp)
    {
        $this->container['noPrimaryTablesResp'] = $noPrimaryTablesResp;
        return $this;
    }

    /**
    * Gets noIndexTablesResp
    *  无索引表列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpecialTablesResp[]|null
    */
    public function getNoIndexTablesResp()
    {
        return $this->container['noIndexTablesResp'];
    }

    /**
    * Sets noIndexTablesResp
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceQuerySpecialTablesResp[]|null $noIndexTablesResp 无索引表列表。
    *
    * @return $this
    */
    public function setNoIndexTablesResp($noIndexTablesResp)
    {
        $this->container['noIndexTablesResp'] = $noIndexTablesResp;
        return $this;
    }

    /**
    * Gets analyzeSuccess
    *  统计分析是否成功。
    *
    * @return bool|null
    */
    public function getAnalyzeSuccess()
    {
        return $this->container['analyzeSuccess'];
    }

    /**
    * Sets analyzeSuccess
    *
    * @param bool|null $analyzeSuccess 统计分析是否成功。
    *
    * @return $this
    */
    public function setAnalyzeSuccess($analyzeSuccess)
    {
        $this->container['analyzeSuccess'] = $analyzeSuccess;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

