<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  策略id
    * packageId  实例id
    * name  策略名
    * cleanThreshold  清洗阈值
    * popPolicy  popPolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'packageId' => 'string',
            'name' => 'string',
            'cleanThreshold' => 'int',
            'popPolicy' => '\HuaweiCloud\SDK\Aad\V1\Model\PopPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  策略id
    * packageId  实例id
    * name  策略名
    * cleanThreshold  清洗阈值
    * popPolicy  popPolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'packageId' => null,
        'name' => null,
        'cleanThreshold' => 'int32',
        'popPolicy' => null
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
    * id  策略id
    * packageId  实例id
    * name  策略名
    * cleanThreshold  清洗阈值
    * popPolicy  popPolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'packageId' => 'package_id',
            'name' => 'name',
            'cleanThreshold' => 'clean_threshold',
            'popPolicy' => 'pop_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  策略id
    * packageId  实例id
    * name  策略名
    * cleanThreshold  清洗阈值
    * popPolicy  popPolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'packageId' => 'setPackageId',
            'name' => 'setName',
            'cleanThreshold' => 'setCleanThreshold',
            'popPolicy' => 'setPopPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  策略id
    * packageId  实例id
    * name  策略名
    * cleanThreshold  清洗阈值
    * popPolicy  popPolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'packageId' => 'getPackageId',
            'name' => 'getName',
            'cleanThreshold' => 'getCleanThreshold',
            'popPolicy' => 'getPopPolicy'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cleanThreshold'] = isset($data['cleanThreshold']) ? $data['cleanThreshold'] : null;
        $this->container['popPolicy'] = isset($data['popPolicy']) ? $data['popPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['packageId']) && (mb_strlen($this->container['packageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['packageId']) && (mb_strlen($this->container['packageId']) < 32)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cleanThreshold']) && ($this->container['cleanThreshold'] > 1000)) {
                $invalidProperties[] = "invalid value for 'cleanThreshold', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cleanThreshold']) && ($this->container['cleanThreshold'] < 100)) {
                $invalidProperties[] = "invalid value for 'cleanThreshold', must be bigger than or equal to 100.";
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
    * Gets id
    *  策略id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 策略id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets packageId
    *  实例id
    *
    * @return string|null
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string|null $packageId 实例id
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets name
    *  策略名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 策略名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets cleanThreshold
    *  清洗阈值
    *
    * @return int|null
    */
    public function getCleanThreshold()
    {
        return $this->container['cleanThreshold'];
    }

    /**
    * Sets cleanThreshold
    *
    * @param int|null $cleanThreshold 清洗阈值
    *
    * @return $this
    */
    public function setCleanThreshold($cleanThreshold)
    {
        $this->container['cleanThreshold'] = $cleanThreshold;
        return $this;
    }

    /**
    * Gets popPolicy
    *  popPolicy
    *
    * @return \HuaweiCloud\SDK\Aad\V1\Model\PopPolicy|null
    */
    public function getPopPolicy()
    {
        return $this->container['popPolicy'];
    }

    /**
    * Sets popPolicy
    *
    * @param \HuaweiCloud\SDK\Aad\V1\Model\PopPolicy|null $popPolicy popPolicy
    *
    * @return $this
    */
    public function setPopPolicy($popPolicy)
    {
        $this->container['popPolicy'] = $popPolicy;
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

