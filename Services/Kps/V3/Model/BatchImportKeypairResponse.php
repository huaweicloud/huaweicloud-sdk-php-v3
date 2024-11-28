<?php

namespace HuaweiCloud\SDK\Kps\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchImportKeypairResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchImportKeypairResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * failedKeypairs  导入失败的SSH密钥对信息及导入失败的原因
    * succeededKeypairs  成功导入的SSH密钥对信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'failedKeypairs' => '\HuaweiCloud\SDK\Kps\V3\Model\FailedKeypair[]',
            'succeededKeypairs' => '\HuaweiCloud\SDK\Kps\V3\Model\CreateKeypairResponseBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * failedKeypairs  导入失败的SSH密钥对信息及导入失败的原因
    * succeededKeypairs  成功导入的SSH密钥对信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'failedKeypairs' => null,
        'succeededKeypairs' => null
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
    * failedKeypairs  导入失败的SSH密钥对信息及导入失败的原因
    * succeededKeypairs  成功导入的SSH密钥对信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'failedKeypairs' => 'failed_keypairs',
            'succeededKeypairs' => 'succeeded_keypairs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * failedKeypairs  导入失败的SSH密钥对信息及导入失败的原因
    * succeededKeypairs  成功导入的SSH密钥对信息
    *
    * @var string[]
    */
    protected static $setters = [
            'failedKeypairs' => 'setFailedKeypairs',
            'succeededKeypairs' => 'setSucceededKeypairs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * failedKeypairs  导入失败的SSH密钥对信息及导入失败的原因
    * succeededKeypairs  成功导入的SSH密钥对信息
    *
    * @var string[]
    */
    protected static $getters = [
            'failedKeypairs' => 'getFailedKeypairs',
            'succeededKeypairs' => 'getSucceededKeypairs'
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
        $this->container['failedKeypairs'] = isset($data['failedKeypairs']) ? $data['failedKeypairs'] : null;
        $this->container['succeededKeypairs'] = isset($data['succeededKeypairs']) ? $data['succeededKeypairs'] : null;
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
    * Gets failedKeypairs
    *  导入失败的SSH密钥对信息及导入失败的原因
    *
    * @return \HuaweiCloud\SDK\Kps\V3\Model\FailedKeypair[]|null
    */
    public function getFailedKeypairs()
    {
        return $this->container['failedKeypairs'];
    }

    /**
    * Sets failedKeypairs
    *
    * @param \HuaweiCloud\SDK\Kps\V3\Model\FailedKeypair[]|null $failedKeypairs 导入失败的SSH密钥对信息及导入失败的原因
    *
    * @return $this
    */
    public function setFailedKeypairs($failedKeypairs)
    {
        $this->container['failedKeypairs'] = $failedKeypairs;
        return $this;
    }

    /**
    * Gets succeededKeypairs
    *  成功导入的SSH密钥对信息
    *
    * @return \HuaweiCloud\SDK\Kps\V3\Model\CreateKeypairResponseBody[]|null
    */
    public function getSucceededKeypairs()
    {
        return $this->container['succeededKeypairs'];
    }

    /**
    * Sets succeededKeypairs
    *
    * @param \HuaweiCloud\SDK\Kps\V3\Model\CreateKeypairResponseBody[]|null $succeededKeypairs 成功导入的SSH密钥对信息
    *
    * @return $this
    */
    public function setSucceededKeypairs($succeededKeypairs)
    {
        $this->container['succeededKeypairs'] = $succeededKeypairs;
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

