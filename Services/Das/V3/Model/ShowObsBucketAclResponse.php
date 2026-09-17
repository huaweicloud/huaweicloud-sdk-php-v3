<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowObsBucketAclResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowObsBucketAclResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketRisk  桶风险
    * message  信息
    * obsAcl  桶ACL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketRisk' => 'string',
            'message' => 'string',
            'obsAcl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketRisk  桶风险
    * message  信息
    * obsAcl  桶ACL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketRisk' => null,
        'message' => null,
        'obsAcl' => null
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
    * bucketRisk  桶风险
    * message  信息
    * obsAcl  桶ACL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketRisk' => 'bucket_risk',
            'message' => 'message',
            'obsAcl' => 'obs_acl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketRisk  桶风险
    * message  信息
    * obsAcl  桶ACL
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketRisk' => 'setBucketRisk',
            'message' => 'setMessage',
            'obsAcl' => 'setObsAcl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketRisk  桶风险
    * message  信息
    * obsAcl  桶ACL
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketRisk' => 'getBucketRisk',
            'message' => 'getMessage',
            'obsAcl' => 'getObsAcl'
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
        $this->container['bucketRisk'] = isset($data['bucketRisk']) ? $data['bucketRisk'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['obsAcl'] = isset($data['obsAcl']) ? $data['obsAcl'] : null;
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
    * Gets bucketRisk
    *  桶风险
    *
    * @return string|null
    */
    public function getBucketRisk()
    {
        return $this->container['bucketRisk'];
    }

    /**
    * Sets bucketRisk
    *
    * @param string|null $bucketRisk 桶风险
    *
    * @return $this
    */
    public function setBucketRisk($bucketRisk)
    {
        $this->container['bucketRisk'] = $bucketRisk;
        return $this;
    }

    /**
    * Gets message
    *  信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets obsAcl
    *  桶ACL
    *
    * @return string|null
    */
    public function getObsAcl()
    {
        return $this->container['obsAcl'];
    }

    /**
    * Sets obsAcl
    *
    * @param string|null $obsAcl 桶ACL
    *
    * @return $this
    */
    public function setObsAcl($obsAcl)
    {
        $this->container['obsAcl'] = $obsAcl;
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

