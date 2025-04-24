<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDomainMultiCertificatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDomainMultiCertificatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * https  https
    * status  执行结果，success，fail
    * result  详情
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'https' => '\HuaweiCloud\SDK\Cdn\V2\Model\UpdateDomainMultiCertificatesResponseBodyContent',
            'status' => 'string',
            'result' => '\HuaweiCloud\SDK\Cdn\V2\Model\UpdateDomainMultiCertificatesResponseBodyResult[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * https  https
    * status  执行结果，success，fail
    * result  详情
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'https' => null,
        'status' => null,
        'result' => null,
        'xRequestId' => null
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
    * https  https
    * status  执行结果，success，fail
    * result  详情
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'https' => 'https',
            'status' => 'status',
            'result' => 'result',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * https  https
    * status  执行结果，success，fail
    * result  详情
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'https' => 'setHttps',
            'status' => 'setStatus',
            'result' => 'setResult',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * https  https
    * status  执行结果，success，fail
    * result  详情
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'https' => 'getHttps',
            'status' => 'getStatus',
            'result' => 'getResult',
            'xRequestId' => 'getXRequestId'
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
        $this->container['https'] = isset($data['https']) ? $data['https'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    * Gets https
    *  https
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UpdateDomainMultiCertificatesResponseBodyContent|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UpdateDomainMultiCertificatesResponseBodyContent|null $https https
    *
    * @return $this
    */
    public function setHttps($https)
    {
        $this->container['https'] = $https;
        return $this;
    }

    /**
    * Gets status
    *  执行结果，success，fail
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 执行结果，success，fail
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets result
    *  详情
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UpdateDomainMultiCertificatesResponseBodyResult[]|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UpdateDomainMultiCertificatesResponseBodyResult[]|null $result 详情
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

