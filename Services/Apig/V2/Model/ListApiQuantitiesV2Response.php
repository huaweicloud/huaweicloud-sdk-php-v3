<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApiQuantitiesV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApiQuantitiesV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceNum  API总个数
    * numsOnRelease  已发布到release环境的API个数
    * numsOffRelease  未发布到release环境的API个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceNum' => 'int',
            'numsOnRelease' => 'int',
            'numsOffRelease' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceNum  API总个数
    * numsOnRelease  已发布到release环境的API个数
    * numsOffRelease  未发布到release环境的API个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceNum' => 'int32',
        'numsOnRelease' => 'int32',
        'numsOffRelease' => 'int32'
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
    * instanceNum  API总个数
    * numsOnRelease  已发布到release环境的API个数
    * numsOffRelease  未发布到release环境的API个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceNum' => 'instance_num',
            'numsOnRelease' => 'nums_on_release',
            'numsOffRelease' => 'nums_off_release'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceNum  API总个数
    * numsOnRelease  已发布到release环境的API个数
    * numsOffRelease  未发布到release环境的API个数
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceNum' => 'setInstanceNum',
            'numsOnRelease' => 'setNumsOnRelease',
            'numsOffRelease' => 'setNumsOffRelease'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceNum  API总个数
    * numsOnRelease  已发布到release环境的API个数
    * numsOffRelease  未发布到release环境的API个数
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceNum' => 'getInstanceNum',
            'numsOnRelease' => 'getNumsOnRelease',
            'numsOffRelease' => 'getNumsOffRelease'
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
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['numsOnRelease'] = isset($data['numsOnRelease']) ? $data['numsOnRelease'] : null;
        $this->container['numsOffRelease'] = isset($data['numsOffRelease']) ? $data['numsOffRelease'] : null;
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
    * Gets instanceNum
    *  API总个数
    *
    * @return int|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int|null $instanceNum API总个数
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets numsOnRelease
    *  已发布到release环境的API个数
    *
    * @return int|null
    */
    public function getNumsOnRelease()
    {
        return $this->container['numsOnRelease'];
    }

    /**
    * Sets numsOnRelease
    *
    * @param int|null $numsOnRelease 已发布到release环境的API个数
    *
    * @return $this
    */
    public function setNumsOnRelease($numsOnRelease)
    {
        $this->container['numsOnRelease'] = $numsOnRelease;
        return $this;
    }

    /**
    * Gets numsOffRelease
    *  未发布到release环境的API个数
    *
    * @return int|null
    */
    public function getNumsOffRelease()
    {
        return $this->container['numsOffRelease'];
    }

    /**
    * Sets numsOffRelease
    *
    * @param int|null $numsOffRelease 未发布到release环境的API个数
    *
    * @return $this
    */
    public function setNumsOffRelease($numsOffRelease)
    {
        $this->container['numsOffRelease'] = $numsOffRelease;
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

