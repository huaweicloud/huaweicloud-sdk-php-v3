<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NameServersResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NameServersResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  待查询名称服务器的类型。  取值范围: public, private。  如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。  如果为private，表示查询内网的名称服务器。
    * region  待查询的region ID。  当查询公网的名称服务器时，此处不填。
    * nsRecords  名称服务器列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'region' => 'string',
            'nsRecords' => '\HuaweiCloud\SDK\Dns\V2\Model\NsRecords[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  待查询名称服务器的类型。  取值范围: public, private。  如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。  如果为private，表示查询内网的名称服务器。
    * region  待查询的region ID。  当查询公网的名称服务器时，此处不填。
    * nsRecords  名称服务器列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'region' => null,
        'nsRecords' => null
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
    * type  待查询名称服务器的类型。  取值范围: public, private。  如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。  如果为private，表示查询内网的名称服务器。
    * region  待查询的region ID。  当查询公网的名称服务器时，此处不填。
    * nsRecords  名称服务器列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'region' => 'region',
            'nsRecords' => 'ns_records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  待查询名称服务器的类型。  取值范围: public, private。  如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。  如果为private，表示查询内网的名称服务器。
    * region  待查询的region ID。  当查询公网的名称服务器时，此处不填。
    * nsRecords  名称服务器列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'region' => 'setRegion',
            'nsRecords' => 'setNsRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  待查询名称服务器的类型。  取值范围: public, private。  如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。  如果为private，表示查询内网的名称服务器。
    * region  待查询的region ID。  当查询公网的名称服务器时，此处不填。
    * nsRecords  名称服务器列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'region' => 'getRegion',
            'nsRecords' => 'getNsRecords'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['nsRecords'] = isset($data['nsRecords']) ? $data['nsRecords'] : null;
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
    * Gets type
    *  待查询名称服务器的类型。  取值范围: public, private。  如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。  如果为private，表示查询内网的名称服务器。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 待查询名称服务器的类型。  取值范围: public, private。  如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。  如果为private，表示查询内网的名称服务器。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets region
    *  待查询的region ID。  当查询公网的名称服务器时，此处不填。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 待查询的region ID。  当查询公网的名称服务器时，此处不填。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets nsRecords
    *  名称服务器列表。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\NsRecords[]|null
    */
    public function getNsRecords()
    {
        return $this->container['nsRecords'];
    }

    /**
    * Sets nsRecords
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\NsRecords[]|null $nsRecords 名称服务器列表。
    *
    * @return $this
    */
    public function setNsRecords($nsRecords)
    {
        $this->container['nsRecords'] = $nsRecords;
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

