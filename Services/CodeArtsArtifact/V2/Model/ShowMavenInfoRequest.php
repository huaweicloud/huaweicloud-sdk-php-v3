<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMavenInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMavenInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policy  snapshot or releases
    * access  r or rw
    * default  是否返回默认仓库 true or false
    * ids  仓库id 多个仓库id用英文逗号间隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policy' => 'string',
            'access' => 'string',
            'default' => 'string',
            'ids' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policy  snapshot or releases
    * access  r or rw
    * default  是否返回默认仓库 true or false
    * ids  仓库id 多个仓库id用英文逗号间隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policy' => null,
        'access' => null,
        'default' => null,
        'ids' => null
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
    * policy  snapshot or releases
    * access  r or rw
    * default  是否返回默认仓库 true or false
    * ids  仓库id 多个仓库id用英文逗号间隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policy' => 'policy',
            'access' => 'access',
            'default' => 'default',
            'ids' => 'ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policy  snapshot or releases
    * access  r or rw
    * default  是否返回默认仓库 true or false
    * ids  仓库id 多个仓库id用英文逗号间隔
    *
    * @var string[]
    */
    protected static $setters = [
            'policy' => 'setPolicy',
            'access' => 'setAccess',
            'default' => 'setDefault',
            'ids' => 'setIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policy  snapshot or releases
    * access  r or rw
    * default  是否返回默认仓库 true or false
    * ids  仓库id 多个仓库id用英文逗号间隔
    *
    * @var string[]
    */
    protected static $getters = [
            'policy' => 'getPolicy',
            'access' => 'getAccess',
            'default' => 'getDefault',
            'ids' => 'getIds'
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
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
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
    * Gets policy
    *  snapshot or releases
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy snapshot or releases
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets access
    *  r or rw
    *
    * @return string|null
    */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
    * Sets access
    *
    * @param string|null $access r or rw
    *
    * @return $this
    */
    public function setAccess($access)
    {
        $this->container['access'] = $access;
        return $this;
    }

    /**
    * Gets default
    *  是否返回默认仓库 true or false
    *
    * @return string|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param string|null $default 是否返回默认仓库 true or false
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets ids
    *  仓库id 多个仓库id用英文逗号间隔
    *
    * @return string|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string|null $ids 仓库id 多个仓库id用英文逗号间隔
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
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

