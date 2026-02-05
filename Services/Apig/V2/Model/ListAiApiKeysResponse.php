<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiApiKeysResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiApiKeysResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  本次返回的列表长度
    * total  满足条件的记录数
    * aiApiKeys  AIAPIKey列表，展示匿名化的已经创建的AIAPIKey。 AIAPIKey的创建数量上限可以通过配额调整。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'total' => 'int',
            'aiApiKeys' => '\HuaweiCloud\SDK\Apig\V2\Model\AiApiKeyBaseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  本次返回的列表长度
    * total  满足条件的记录数
    * aiApiKeys  AIAPIKey列表，展示匿名化的已经创建的AIAPIKey。 AIAPIKey的创建数量上限可以通过配额调整。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => 'int32',
        'total' => 'int64',
        'aiApiKeys' => null
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
    * size  本次返回的列表长度
    * total  满足条件的记录数
    * aiApiKeys  AIAPIKey列表，展示匿名化的已经创建的AIAPIKey。 AIAPIKey的创建数量上限可以通过配额调整。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'total' => 'total',
            'aiApiKeys' => 'ai_api_keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  本次返回的列表长度
    * total  满足条件的记录数
    * aiApiKeys  AIAPIKey列表，展示匿名化的已经创建的AIAPIKey。 AIAPIKey的创建数量上限可以通过配额调整。
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'total' => 'setTotal',
            'aiApiKeys' => 'setAiApiKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  本次返回的列表长度
    * total  满足条件的记录数
    * aiApiKeys  AIAPIKey列表，展示匿名化的已经创建的AIAPIKey。 AIAPIKey的创建数量上限可以通过配额调整。
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'total' => 'getTotal',
            'aiApiKeys' => 'getAiApiKeys'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['aiApiKeys'] = isset($data['aiApiKeys']) ? $data['aiApiKeys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
    * Gets size
    *  本次返回的列表长度
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 本次返回的列表长度
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets total
    *  满足条件的记录数
    *
    * @return int
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int $total 满足条件的记录数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets aiApiKeys
    *  AIAPIKey列表，展示匿名化的已经创建的AIAPIKey。 AIAPIKey的创建数量上限可以通过配额调整。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\AiApiKeyBaseInfo[]|null
    */
    public function getAiApiKeys()
    {
        return $this->container['aiApiKeys'];
    }

    /**
    * Sets aiApiKeys
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\AiApiKeyBaseInfo[]|null $aiApiKeys AIAPIKey列表，展示匿名化的已经创建的AIAPIKey。 AIAPIKey的创建数量上限可以通过配额调整。
    *
    * @return $this
    */
    public function setAiApiKeys($aiApiKeys)
    {
        $this->container['aiApiKeys'] = $aiApiKeys;
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

