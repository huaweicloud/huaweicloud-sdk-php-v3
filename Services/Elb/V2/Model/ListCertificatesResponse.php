<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCertificatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCertificatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificates  SSL证书列表对象
    * instanceNum  证书的个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificates' => '\HuaweiCloud\SDK\Elb\V2\Model\CertificateResp[]',
            'instanceNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificates  SSL证书列表对象
    * instanceNum  证书的个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificates' => null,
        'instanceNum' => 'int32'
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
    * certificates  SSL证书列表对象
    * instanceNum  证书的个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificates' => 'certificates',
            'instanceNum' => 'instance_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificates  SSL证书列表对象
    * instanceNum  证书的个数
    *
    * @var string[]
    */
    protected static $setters = [
            'certificates' => 'setCertificates',
            'instanceNum' => 'setInstanceNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificates  SSL证书列表对象
    * instanceNum  证书的个数
    *
    * @var string[]
    */
    protected static $getters = [
            'certificates' => 'getCertificates',
            'instanceNum' => 'getInstanceNum'
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
        $this->container['certificates'] = isset($data['certificates']) ? $data['certificates'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
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
    * Gets certificates
    *  SSL证书列表对象
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\CertificateResp[]|null
    */
    public function getCertificates()
    {
        return $this->container['certificates'];
    }

    /**
    * Sets certificates
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\CertificateResp[]|null $certificates SSL证书列表对象
    *
    * @return $this
    */
    public function setCertificates($certificates)
    {
        $this->container['certificates'] = $certificates;
        return $this;
    }

    /**
    * Gets instanceNum
    *  证书的个数
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
    * @param int|null $instanceNum 证书的个数
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
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

