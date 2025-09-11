<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * page  当前页
    * size  每页大小
    * riskLevels  风险级别 - HIGH - MEDIUM - LOW - NO_RISK
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'page' => 'int',
            'size' => 'int',
            'riskLevels' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * page  当前页
    * size  每页大小
    * riskLevels  风险级别 - HIGH - MEDIUM - LOW - NO_RISK
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'page' => 'int32',
        'size' => 'int32',
        'riskLevels' => null
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
    * page  当前页
    * size  每页大小
    * riskLevels  风险级别 - HIGH - MEDIUM - LOW - NO_RISK
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'page' => 'page',
            'size' => 'size',
            'riskLevels' => 'risk_levels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * page  当前页
    * size  每页大小
    * riskLevels  风险级别 - HIGH - MEDIUM - LOW - NO_RISK
    *
    * @var string[]
    */
    protected static $setters = [
            'page' => 'setPage',
            'size' => 'setSize',
            'riskLevels' => 'setRiskLevels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * page  当前页
    * size  每页大小
    * riskLevels  风险级别 - HIGH - MEDIUM - LOW - NO_RISK
    *
    * @var string[]
    */
    protected static $getters = [
            'page' => 'getPage',
            'size' => 'getSize',
            'riskLevels' => 'getRiskLevels'
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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['riskLevels'] = isset($data['riskLevels']) ? $data['riskLevels'] : null;
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
    * Gets page
    *  当前页
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 当前页
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  每页大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 每页大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets riskLevels
    *  风险级别 - HIGH - MEDIUM - LOW - NO_RISK
    *
    * @return string|null
    */
    public function getRiskLevels()
    {
        return $this->container['riskLevels'];
    }

    /**
    * Sets riskLevels
    *
    * @param string|null $riskLevels 风险级别 - HIGH - MEDIUM - LOW - NO_RISK
    *
    * @return $this
    */
    public function setRiskLevels($riskLevels)
    {
        $this->container['riskLevels'] = $riskLevels;
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

