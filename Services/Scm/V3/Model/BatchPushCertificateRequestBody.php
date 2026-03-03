<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchPushCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchPushCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetProjects  推送到的目标服务所在的区域，CDN、ELB、WAF。
    * targetService  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetProjects' => 'string[]',
            'targetService' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetProjects  推送到的目标服务所在的区域，CDN、ELB、WAF。
    * targetService  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetProjects' => null,
        'targetService' => null
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
    * targetProjects  推送到的目标服务所在的区域，CDN、ELB、WAF。
    * targetService  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetProjects' => 'target_projects',
            'targetService' => 'target_service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetProjects  推送到的目标服务所在的区域，CDN、ELB、WAF。
    * targetService  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetProjects' => 'setTargetProjects',
            'targetService' => 'setTargetService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetProjects  推送到的目标服务所在的区域，CDN、ELB、WAF。
    * targetService  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetProjects' => 'getTargetProjects',
            'targetService' => 'getTargetService'
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
        $this->container['targetProjects'] = isset($data['targetProjects']) ? $data['targetProjects'] : null;
        $this->container['targetService'] = isset($data['targetService']) ? $data['targetService'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetProjects'] === null) {
            $invalidProperties[] = "'targetProjects' can't be null";
        }
        if ($this->container['targetService'] === null) {
            $invalidProperties[] = "'targetService' can't be null";
        }
            if ((mb_strlen($this->container['targetService']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetService', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['targetService']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetService', the character length must be bigger than or equal to 1.";
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
    * Gets targetProjects
    *  推送到的目标服务所在的区域，CDN、ELB、WAF。
    *
    * @return string[]
    */
    public function getTargetProjects()
    {
        return $this->container['targetProjects'];
    }

    /**
    * Sets targetProjects
    *
    * @param string[] $targetProjects 推送到的目标服务所在的区域，CDN、ELB、WAF。
    *
    * @return $this
    */
    public function setTargetProjects($targetProjects)
    {
        $this->container['targetProjects'] = $targetProjects;
        return $this;
    }

    /**
    * Gets targetService
    *  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @return string
    */
    public function getTargetService()
    {
        return $this->container['targetService'];
    }

    /**
    * Sets targetService
    *
    * @param string $targetService 证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @return $this
    */
    public function setTargetService($targetService)
    {
        $this->container['targetService'] = $targetService;
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

