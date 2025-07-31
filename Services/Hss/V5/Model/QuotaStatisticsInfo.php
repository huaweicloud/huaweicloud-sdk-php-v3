<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaStatisticsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaStatisticsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  version
    * idleNum  空闲总数
    * usedNum  使用中总数
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'idleNum' => 'int',
            'usedNum' => 'int',
            'totalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  version
    * idleNum  空闲总数
    * usedNum  使用中总数
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'idleNum' => 'int32',
        'usedNum' => 'int32',
        'totalNum' => 'int32'
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
    * version  version
    * idleNum  空闲总数
    * usedNum  使用中总数
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'idleNum' => 'idle_num',
            'usedNum' => 'used_num',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  version
    * idleNum  空闲总数
    * usedNum  使用中总数
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'idleNum' => 'setIdleNum',
            'usedNum' => 'setUsedNum',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  version
    * idleNum  空闲总数
    * usedNum  使用中总数
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'idleNum' => 'getIdleNum',
            'usedNum' => 'getUsedNum',
            'totalNum' => 'getTotalNum'
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
    const VERSION_HSS_VERSION_BASIC = 'hss.version.basic';
    const VERSION_HSS_VERSION_ENTERPRISE = 'hss.version.enterprise';
    const VERSION_HSS_VERSION_PREMIUM = 'hss.version.premium';
    const VERSION_HSS_VERSION_WTP = 'hss.version.wtp';
    const VERSION_HSS_VERSION_CONTAINER_ENTERPRISE = 'hss.version.container.enterprise';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_HSS_VERSION_BASIC,
            self::VERSION_HSS_VERSION_ENTERPRISE,
            self::VERSION_HSS_VERSION_PREMIUM,
            self::VERSION_HSS_VERSION_WTP,
            self::VERSION_HSS_VERSION_CONTAINER_ENTERPRISE,
        ];
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['idleNum'] = isset($data['idleNum']) ? $data['idleNum'] : null;
        $this->container['usedNum'] = isset($data['usedNum']) ? $data['usedNum'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVersionAllowableValues();
                if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'version', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['idleNum']) && ($this->container['idleNum'] > 300000)) {
                $invalidProperties[] = "invalid value for 'idleNum', must be smaller than or equal to 300000.";
            }
            if (!is_null($this->container['idleNum']) && ($this->container['idleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'idleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usedNum']) && ($this->container['usedNum'] > 300000)) {
                $invalidProperties[] = "invalid value for 'usedNum', must be smaller than or equal to 300000.";
            }
            if (!is_null($this->container['usedNum']) && ($this->container['usedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 300000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 300000.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
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
    * Gets version
    *  version
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets idleNum
    *  空闲总数
    *
    * @return int|null
    */
    public function getIdleNum()
    {
        return $this->container['idleNum'];
    }

    /**
    * Sets idleNum
    *
    * @param int|null $idleNum 空闲总数
    *
    * @return $this
    */
    public function setIdleNum($idleNum)
    {
        $this->container['idleNum'] = $idleNum;
        return $this;
    }

    /**
    * Gets usedNum
    *  使用中总数
    *
    * @return int|null
    */
    public function getUsedNum()
    {
        return $this->container['usedNum'];
    }

    /**
    * Sets usedNum
    *
    * @param int|null $usedNum 使用中总数
    *
    * @return $this
    */
    public function setUsedNum($usedNum)
    {
        $this->container['usedNum'] = $usedNum;
        return $this;
    }

    /**
    * Gets totalNum
    *  总数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
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

