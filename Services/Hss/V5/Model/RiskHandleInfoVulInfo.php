<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskHandleInfoVulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RiskHandleInfo_vul_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulScanTaskNum  **参数解释**: 漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * vulNum  **参数解释**: 发现的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledVulNum  **参数解释**: 已经处置的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledRate  **参数解释**: 处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * newUrgentVulNum  **参数解释**: 新增应急漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulScanTaskNum' => 'int',
            'vulNum' => 'int',
            'handledVulNum' => 'int',
            'handledRate' => 'float',
            'beatRate' => 'float',
            'newUrgentVulNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulScanTaskNum  **参数解释**: 漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * vulNum  **参数解释**: 发现的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledVulNum  **参数解释**: 已经处置的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledRate  **参数解释**: 处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * newUrgentVulNum  **参数解释**: 新增应急漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulScanTaskNum' => 'int32',
        'vulNum' => 'int64',
        'handledVulNum' => 'int64',
        'handledRate' => 'float',
        'beatRate' => 'float',
        'newUrgentVulNum' => 'int32'
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
    * vulScanTaskNum  **参数解释**: 漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * vulNum  **参数解释**: 发现的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledVulNum  **参数解释**: 已经处置的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledRate  **参数解释**: 处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * newUrgentVulNum  **参数解释**: 新增应急漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulScanTaskNum' => 'vul_scan_task_num',
            'vulNum' => 'vul_num',
            'handledVulNum' => 'handled_vul_num',
            'handledRate' => 'handled_rate',
            'beatRate' => 'beat_rate',
            'newUrgentVulNum' => 'new_urgent_vul_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulScanTaskNum  **参数解释**: 漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * vulNum  **参数解释**: 发现的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledVulNum  **参数解释**: 已经处置的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledRate  **参数解释**: 处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * newUrgentVulNum  **参数解释**: 新增应急漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'vulScanTaskNum' => 'setVulScanTaskNum',
            'vulNum' => 'setVulNum',
            'handledVulNum' => 'setHandledVulNum',
            'handledRate' => 'setHandledRate',
            'beatRate' => 'setBeatRate',
            'newUrgentVulNum' => 'setNewUrgentVulNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulScanTaskNum  **参数解释**: 漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    * vulNum  **参数解释**: 发现的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledVulNum  **参数解释**: 已经处置的漏洞数 **取值范围**: 最小值0，最大值2147483647
    * handledRate  **参数解释**: 处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * newUrgentVulNum  **参数解释**: 新增应急漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'vulScanTaskNum' => 'getVulScanTaskNum',
            'vulNum' => 'getVulNum',
            'handledVulNum' => 'getHandledVulNum',
            'handledRate' => 'getHandledRate',
            'beatRate' => 'getBeatRate',
            'newUrgentVulNum' => 'getNewUrgentVulNum'
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
        $this->container['vulScanTaskNum'] = isset($data['vulScanTaskNum']) ? $data['vulScanTaskNum'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['handledVulNum'] = isset($data['handledVulNum']) ? $data['handledVulNum'] : null;
        $this->container['handledRate'] = isset($data['handledRate']) ? $data['handledRate'] : null;
        $this->container['beatRate'] = isset($data['beatRate']) ? $data['beatRate'] : null;
        $this->container['newUrgentVulNum'] = isset($data['newUrgentVulNum']) ? $data['newUrgentVulNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulScanTaskNum']) && ($this->container['vulScanTaskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulScanTaskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulScanTaskNum']) && ($this->container['vulScanTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulScanTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handledVulNum']) && ($this->container['handledVulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'handledVulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['handledVulNum']) && ($this->container['handledVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'handledVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handledRate']) && ($this->container['handledRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'handledRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['handledRate']) && ($this->container['handledRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'handledRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['beatRate']) && ($this->container['beatRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'beatRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['beatRate']) && ($this->container['beatRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'beatRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['newUrgentVulNum']) && ($this->container['newUrgentVulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'newUrgentVulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['newUrgentVulNum']) && ($this->container['newUrgentVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'newUrgentVulNum', must be bigger than or equal to 0.";
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
    * Gets vulScanTaskNum
    *  **参数解释**: 漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVulScanTaskNum()
    {
        return $this->container['vulScanTaskNum'];
    }

    /**
    * Sets vulScanTaskNum
    *
    * @param int|null $vulScanTaskNum **参数解释**: 漏洞扫描任务次数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVulScanTaskNum($vulScanTaskNum)
    {
        $this->container['vulScanTaskNum'] = $vulScanTaskNum;
        return $this;
    }

    /**
    * Gets vulNum
    *  **参数解释**: 发现的漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVulNum()
    {
        return $this->container['vulNum'];
    }

    /**
    * Sets vulNum
    *
    * @param int|null $vulNum **参数解释**: 发现的漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVulNum($vulNum)
    {
        $this->container['vulNum'] = $vulNum;
        return $this;
    }

    /**
    * Gets handledVulNum
    *  **参数解释**: 已经处置的漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHandledVulNum()
    {
        return $this->container['handledVulNum'];
    }

    /**
    * Sets handledVulNum
    *
    * @param int|null $handledVulNum **参数解释**: 已经处置的漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHandledVulNum($handledVulNum)
    {
        $this->container['handledVulNum'] = $handledVulNum;
        return $this;
    }

    /**
    * Gets handledRate
    *  **参数解释**: 处置率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getHandledRate()
    {
        return $this->container['handledRate'];
    }

    /**
    * Sets handledRate
    *
    * @param float|null $handledRate **参数解释**: 处置率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setHandledRate($handledRate)
    {
        $this->container['handledRate'] = $handledRate;
        return $this;
    }

    /**
    * Gets beatRate
    *  **参数解释**: 处置率击败的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getBeatRate()
    {
        return $this->container['beatRate'];
    }

    /**
    * Sets beatRate
    *
    * @param float|null $beatRate **参数解释**: 处置率击败的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setBeatRate($beatRate)
    {
        $this->container['beatRate'] = $beatRate;
        return $this;
    }

    /**
    * Gets newUrgentVulNum
    *  **参数解释**: 新增应急漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getNewUrgentVulNum()
    {
        return $this->container['newUrgentVulNum'];
    }

    /**
    * Sets newUrgentVulNum
    *
    * @param int|null $newUrgentVulNum **参数解释**: 新增应急漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setNewUrgentVulNum($newUrgentVulNum)
    {
        $this->container['newUrgentVulNum'] = $newUrgentVulNum;
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

