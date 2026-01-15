<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AzInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AzInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneName  可用区名称
    * zoneNumber  可用区编号
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    * alias  可用区中文别名
    * aliasUs  可用区英文别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneName' => 'string',
            'zoneNumber' => 'int',
            'azType' => 'string',
            'alias' => 'string',
            'aliasUs' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneName  可用区名称
    * zoneNumber  可用区编号
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    * alias  可用区中文别名
    * aliasUs  可用区英文别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneName' => null,
        'zoneNumber' => 'int32',
        'azType' => null,
        'alias' => null,
        'aliasUs' => null
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
    * zoneName  可用区名称
    * zoneNumber  可用区编号
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    * alias  可用区中文别名
    * aliasUs  可用区英文别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneName' => 'zone_name',
            'zoneNumber' => 'zone_number',
            'azType' => 'az_type',
            'alias' => 'alias',
            'aliasUs' => 'alias_us'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneName  可用区名称
    * zoneNumber  可用区编号
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    * alias  可用区中文别名
    * aliasUs  可用区英文别名
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneName' => 'setZoneName',
            'zoneNumber' => 'setZoneNumber',
            'azType' => 'setAzType',
            'alias' => 'setAlias',
            'aliasUs' => 'setAliasUs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneName  可用区名称
    * zoneNumber  可用区编号
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    * alias  可用区中文别名
    * aliasUs  可用区英文别名
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneName' => 'getZoneName',
            'zoneNumber' => 'getZoneNumber',
            'azType' => 'getAzType',
            'alias' => 'getAlias',
            'aliasUs' => 'getAliasUs'
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
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['zoneNumber'] = isset($data['zoneNumber']) ? $data['zoneNumber'] : null;
        $this->container['azType'] = isset($data['azType']) ? $data['azType'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['aliasUs'] = isset($data['aliasUs']) ? $data['aliasUs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zoneName'] === null) {
            $invalidProperties[] = "'zoneName' can't be null";
        }
        if ($this->container['zoneNumber'] === null) {
            $invalidProperties[] = "'zoneNumber' can't be null";
        }
        if ($this->container['azType'] === null) {
            $invalidProperties[] = "'azType' can't be null";
        }
        if ($this->container['alias'] === null) {
            $invalidProperties[] = "'alias' can't be null";
        }
        if ($this->container['aliasUs'] === null) {
            $invalidProperties[] = "'aliasUs' can't be null";
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
    * Gets zoneName
    *  可用区名称
    *
    * @return string
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string $zoneName 可用区名称
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets zoneNumber
    *  可用区编号
    *
    * @return int
    */
    public function getZoneNumber()
    {
        return $this->container['zoneNumber'];
    }

    /**
    * Sets zoneNumber
    *
    * @param int $zoneNumber 可用区编号
    *
    * @return $this
    */
    public function setZoneNumber($zoneNumber)
    {
        $this->container['zoneNumber'] = $zoneNumber;
        return $this;
    }

    /**
    * Gets azType
    *  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @return string
    */
    public function getAzType()
    {
        return $this->container['azType'];
    }

    /**
    * Sets azType
    *
    * @param string $azType 可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @return $this
    */
    public function setAzType($azType)
    {
        $this->container['azType'] = $azType;
        return $this;
    }

    /**
    * Gets alias
    *  可用区中文别名
    *
    * @return string
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string $alias 可用区中文别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets aliasUs
    *  可用区英文别名
    *
    * @return string
    */
    public function getAliasUs()
    {
        return $this->container['aliasUs'];
    }

    /**
    * Sets aliasUs
    *
    * @param string $aliasUs 可用区英文别名
    *
    * @return $this
    */
    public function setAliasUs($aliasUs)
    {
        $this->container['aliasUs'] = $aliasUs;
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

