<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalVulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalVulInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  漏洞名称
    * vulId  **参数解释** 漏洞ID **取值范围** 字符长度0-65535位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：需尽快修复。 - delay_repair：可延后修复。 - not_needed_repair：暂可不修复。
    * decription  **参数解释** 漏洞描述 **取值范围** 字符长度0-65535位
    * solution  **参数解释** 解决方案 **取值范围** 字符长度0-65535位
    * url  **参数解释** URL链接 **取值范围** 字符长度0-65535位
    * historyNumber  **参数解释** 历史受影响镜像的个数 **取值范围** 取值0-65535
    * undealNumber  **参数解释** 未处理镜像的格式 **取值范围** 取值0-65535
    * dataList  cve列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'vulId' => 'string',
            'repairNecessity' => 'string',
            'decription' => 'string',
            'solution' => 'string',
            'url' => 'string',
            'historyNumber' => 'int',
            'undealNumber' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\CveInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  漏洞名称
    * vulId  **参数解释** 漏洞ID **取值范围** 字符长度0-65535位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：需尽快修复。 - delay_repair：可延后修复。 - not_needed_repair：暂可不修复。
    * decription  **参数解释** 漏洞描述 **取值范围** 字符长度0-65535位
    * solution  **参数解释** 解决方案 **取值范围** 字符长度0-65535位
    * url  **参数解释** URL链接 **取值范围** 字符长度0-65535位
    * historyNumber  **参数解释** 历史受影响镜像的个数 **取值范围** 取值0-65535
    * undealNumber  **参数解释** 未处理镜像的格式 **取值范围** 取值0-65535
    * dataList  cve列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'vulId' => null,
        'repairNecessity' => null,
        'decription' => null,
        'solution' => null,
        'url' => null,
        'historyNumber' => 'int32',
        'undealNumber' => 'int32',
        'dataList' => null
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
    * vulName  漏洞名称
    * vulId  **参数解释** 漏洞ID **取值范围** 字符长度0-65535位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：需尽快修复。 - delay_repair：可延后修复。 - not_needed_repair：暂可不修复。
    * decription  **参数解释** 漏洞描述 **取值范围** 字符长度0-65535位
    * solution  **参数解释** 解决方案 **取值范围** 字符长度0-65535位
    * url  **参数解释** URL链接 **取值范围** 字符长度0-65535位
    * historyNumber  **参数解释** 历史受影响镜像的个数 **取值范围** 取值0-65535
    * undealNumber  **参数解释** 未处理镜像的格式 **取值范围** 取值0-65535
    * dataList  cve列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'vulId' => 'vul_id',
            'repairNecessity' => 'repair_necessity',
            'decription' => 'decription',
            'solution' => 'solution',
            'url' => 'url',
            'historyNumber' => 'history_number',
            'undealNumber' => 'undeal_number',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  漏洞名称
    * vulId  **参数解释** 漏洞ID **取值范围** 字符长度0-65535位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：需尽快修复。 - delay_repair：可延后修复。 - not_needed_repair：暂可不修复。
    * decription  **参数解释** 漏洞描述 **取值范围** 字符长度0-65535位
    * solution  **参数解释** 解决方案 **取值范围** 字符长度0-65535位
    * url  **参数解释** URL链接 **取值范围** 字符长度0-65535位
    * historyNumber  **参数解释** 历史受影响镜像的个数 **取值范围** 取值0-65535
    * undealNumber  **参数解释** 未处理镜像的格式 **取值范围** 取值0-65535
    * dataList  cve列表
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'vulId' => 'setVulId',
            'repairNecessity' => 'setRepairNecessity',
            'decription' => 'setDecription',
            'solution' => 'setSolution',
            'url' => 'setUrl',
            'historyNumber' => 'setHistoryNumber',
            'undealNumber' => 'setUndealNumber',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  漏洞名称
    * vulId  **参数解释** 漏洞ID **取值范围** 字符长度0-65535位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：需尽快修复。 - delay_repair：可延后修复。 - not_needed_repair：暂可不修复。
    * decription  **参数解释** 漏洞描述 **取值范围** 字符长度0-65535位
    * solution  **参数解释** 解决方案 **取值范围** 字符长度0-65535位
    * url  **参数解释** URL链接 **取值范围** 字符长度0-65535位
    * historyNumber  **参数解释** 历史受影响镜像的个数 **取值范围** 取值0-65535
    * undealNumber  **参数解释** 未处理镜像的格式 **取值范围** 取值0-65535
    * dataList  cve列表
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'vulId' => 'getVulId',
            'repairNecessity' => 'getRepairNecessity',
            'decription' => 'getDecription',
            'solution' => 'getSolution',
            'url' => 'getUrl',
            'historyNumber' => 'getHistoryNumber',
            'undealNumber' => 'getUndealNumber',
            'dataList' => 'getDataList'
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
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['decription'] = isset($data['decription']) ? $data['decription'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['historyNumber'] = isset($data['historyNumber']) ? $data['historyNumber'] : null;
        $this->container['undealNumber'] = isset($data['undealNumber']) ? $data['undealNumber'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) > 65535)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) < 0)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['decription']) && (mb_strlen($this->container['decription']) > 65535)) {
                $invalidProperties[] = "invalid value for 'decription', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['decription']) && (mb_strlen($this->container['decription']) < 0)) {
                $invalidProperties[] = "invalid value for 'decription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['solution']) && (mb_strlen($this->container['solution']) > 65535)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['solution']) && (mb_strlen($this->container['solution']) < 0)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 65535)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['historyNumber']) && ($this->container['historyNumber'] > 65535)) {
                $invalidProperties[] = "invalid value for 'historyNumber', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['historyNumber']) && ($this->container['historyNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'historyNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['undealNumber']) && ($this->container['undealNumber'] > 65535)) {
                $invalidProperties[] = "invalid value for 'undealNumber', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['undealNumber']) && ($this->container['undealNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'undealNumber', must be bigger than or equal to 0.";
            }
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
    * Gets vulName
    *  漏洞名称
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName 漏洞名称
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释** 漏洞ID **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释** 漏洞ID **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：需尽快修复。 - delay_repair：可延后修复。 - not_needed_repair：暂可不修复。
    *
    * @return string|null
    */
    public function getRepairNecessity()
    {
        return $this->container['repairNecessity'];
    }

    /**
    * Sets repairNecessity
    *
    * @param string|null $repairNecessity **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：需尽快修复。 - delay_repair：可延后修复。 - not_needed_repair：暂可不修复。
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets decription
    *  **参数解释** 漏洞描述 **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getDecription()
    {
        return $this->container['decription'];
    }

    /**
    * Sets decription
    *
    * @param string|null $decription **参数解释** 漏洞描述 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setDecription($decription)
    {
        $this->container['decription'] = $decription;
        return $this;
    }

    /**
    * Gets solution
    *  **参数解释** 解决方案 **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string|null $solution **参数解释** 解决方案 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释** URL链接 **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释** URL链接 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets historyNumber
    *  **参数解释** 历史受影响镜像的个数 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getHistoryNumber()
    {
        return $this->container['historyNumber'];
    }

    /**
    * Sets historyNumber
    *
    * @param int|null $historyNumber **参数解释** 历史受影响镜像的个数 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setHistoryNumber($historyNumber)
    {
        $this->container['historyNumber'] = $historyNumber;
        return $this;
    }

    /**
    * Gets undealNumber
    *  **参数解释** 未处理镜像的格式 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getUndealNumber()
    {
        return $this->container['undealNumber'];
    }

    /**
    * Sets undealNumber
    *
    * @param int|null $undealNumber **参数解释** 未处理镜像的格式 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setUndealNumber($undealNumber)
    {
        $this->container['undealNumber'] = $undealNumber;
        return $this;
    }

    /**
    * Gets dataList
    *  cve列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CveInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CveInfo[]|null $dataList cve列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

