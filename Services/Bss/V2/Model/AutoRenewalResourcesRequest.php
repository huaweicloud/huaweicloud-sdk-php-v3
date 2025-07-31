<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoRenewalResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoRenewalResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源实例ID。您可以调用[查询客户包年包月资源列表](https://support.huaweicloud.com/api-bpconsole/api_order_00021.html)接口获取资源ID。在设置弹性云服务器自动续费时，能够自动将其挂载的硬盘一并设置为自动续费。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'body' => '\HuaweiCloud\SDK\Bss\V2\Model\AutoRenewalResourcesReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源实例ID。您可以调用[查询客户包年包月资源列表](https://support.huaweicloud.com/api-bpconsole/api_order_00021.html)接口获取资源ID。在设置弹性云服务器自动续费时，能够自动将其挂载的硬盘一并设置为自动续费。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'body' => null
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
    * resourceId  资源实例ID。您可以调用[查询客户包年包月资源列表](https://support.huaweicloud.com/api-bpconsole/api_order_00021.html)接口获取资源ID。在设置弹性云服务器自动续费时，能够自动将其挂载的硬盘一并设置为自动续费。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源实例ID。您可以调用[查询客户包年包月资源列表](https://support.huaweicloud.com/api-bpconsole/api_order_00021.html)接口获取资源ID。在设置弹性云服务器自动续费时，能够自动将其挂载的硬盘一并设置为自动续费。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源实例ID。您可以调用[查询客户包年包月资源列表](https://support.huaweicloud.com/api-bpconsole/api_order_00021.html)接口获取资源ID。在设置弹性云服务器自动续费时，能够自动将其挂载的硬盘一并设置为自动续费。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'body' => 'getBody'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
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
    * Gets resourceId
    *  资源实例ID。您可以调用[查询客户包年包月资源列表](https://support.huaweicloud.com/api-bpconsole/api_order_00021.html)接口获取资源ID。在设置弹性云服务器自动续费时，能够自动将其挂载的硬盘一并设置为自动续费。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源实例ID。您可以调用[查询客户包年包月资源列表](https://support.huaweicloud.com/api-bpconsole/api_order_00021.html)接口获取资源ID。在设置弹性云服务器自动续费时，能够自动将其挂载的硬盘一并设置为自动续费。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\AutoRenewalResourcesReq|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\AutoRenewalResourcesReq|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

