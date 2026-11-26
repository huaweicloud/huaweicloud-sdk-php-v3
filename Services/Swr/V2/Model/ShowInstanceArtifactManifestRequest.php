<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceArtifactManifestRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceArtifactManifestRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  注册表实例ID
    * namespaceName  命名空间名称
    * repositoryName  制品仓库名称, 如果您的镜像名称repository_name参数中有/，请先把 / 替换成 %2F 再进行请求。注意：使用curl命令请求，需要把 / 替换成 %252F(即 %2F 的 % 被编码为 %25)再次请求。
    * reference  制品摘要
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'namespaceName' => 'string',
            'repositoryName' => 'string',
            'reference' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  注册表实例ID
    * namespaceName  命名空间名称
    * repositoryName  制品仓库名称, 如果您的镜像名称repository_name参数中有/，请先把 / 替换成 %2F 再进行请求。注意：使用curl命令请求，需要把 / 替换成 %252F(即 %2F 的 % 被编码为 %25)再次请求。
    * reference  制品摘要
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'namespaceName' => null,
        'repositoryName' => null,
        'reference' => null
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
    * instanceId  注册表实例ID
    * namespaceName  命名空间名称
    * repositoryName  制品仓库名称, 如果您的镜像名称repository_name参数中有/，请先把 / 替换成 %2F 再进行请求。注意：使用curl命令请求，需要把 / 替换成 %252F(即 %2F 的 % 被编码为 %25)再次请求。
    * reference  制品摘要
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'namespaceName' => 'namespace_name',
            'repositoryName' => 'repository_name',
            'reference' => 'reference'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  注册表实例ID
    * namespaceName  命名空间名称
    * repositoryName  制品仓库名称, 如果您的镜像名称repository_name参数中有/，请先把 / 替换成 %2F 再进行请求。注意：使用curl命令请求，需要把 / 替换成 %252F(即 %2F 的 % 被编码为 %25)再次请求。
    * reference  制品摘要
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'namespaceName' => 'setNamespaceName',
            'repositoryName' => 'setRepositoryName',
            'reference' => 'setReference'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  注册表实例ID
    * namespaceName  命名空间名称
    * repositoryName  制品仓库名称, 如果您的镜像名称repository_name参数中有/，请先把 / 替换成 %2F 再进行请求。注意：使用curl命令请求，需要把 / 替换成 %252F(即 %2F 的 % 被编码为 %25)再次请求。
    * reference  制品摘要
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'namespaceName' => 'getNamespaceName',
            'repositoryName' => 'getRepositoryName',
            'reference' => 'getReference'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['namespaceName'] === null) {
            $invalidProperties[] = "'namespaceName' can't be null";
        }
        if ($this->container['repositoryName'] === null) {
            $invalidProperties[] = "'repositoryName' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
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
    * Gets instanceId
    *  注册表实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 注册表实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名称
    *
    * @return string
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string $namespaceName 命名空间名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets repositoryName
    *  制品仓库名称, 如果您的镜像名称repository_name参数中有/，请先把 / 替换成 %2F 再进行请求。注意：使用curl命令请求，需要把 / 替换成 %252F(即 %2F 的 % 被编码为 %25)再次请求。
    *
    * @return string
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string $repositoryName 制品仓库名称, 如果您的镜像名称repository_name参数中有/，请先把 / 替换成 %2F 再进行请求。注意：使用curl命令请求，需要把 / 替换成 %252F(即 %2F 的 % 被编码为 %25)再次请求。
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets reference
    *  制品摘要
    *
    * @return string
    */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
    * Sets reference
    *
    * @param string $reference 制品摘要
    *
    * @return $this
    */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;
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

