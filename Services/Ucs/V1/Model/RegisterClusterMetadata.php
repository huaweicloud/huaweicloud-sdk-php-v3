<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterClusterMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterCluster_metadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  集群ID信息，仅在注册CCE导入集群时使用，其他类型集群无需填写。
    * name  CCE集群填写CCE集群名称，其他类型集群自定义
    * labels  标签信息。可为空，不为空时，必须满足kurbenetes label规范,最多可支持100个标签。
    * annotations  集群annotations信息。 附着集群必填一个kubeconfig字段，取值是kubeconfig文件的内容。kubeconfig文件获取方法请参见[获取KubeConfig文件](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0138.html)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'name' => 'string',
            'labels' => 'map[string,string]',
            'annotations' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  集群ID信息，仅在注册CCE导入集群时使用，其他类型集群无需填写。
    * name  CCE集群填写CCE集群名称，其他类型集群自定义
    * labels  标签信息。可为空，不为空时，必须满足kurbenetes label规范,最多可支持100个标签。
    * annotations  集群annotations信息。 附着集群必填一个kubeconfig字段，取值是kubeconfig文件的内容。kubeconfig文件获取方法请参见[获取KubeConfig文件](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0138.html)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'name' => null,
        'labels' => null,
        'annotations' => null
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
    * uid  集群ID信息，仅在注册CCE导入集群时使用，其他类型集群无需填写。
    * name  CCE集群填写CCE集群名称，其他类型集群自定义
    * labels  标签信息。可为空，不为空时，必须满足kurbenetes label规范,最多可支持100个标签。
    * annotations  集群annotations信息。 附着集群必填一个kubeconfig字段，取值是kubeconfig文件的内容。kubeconfig文件获取方法请参见[获取KubeConfig文件](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0138.html)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'name' => 'name',
            'labels' => 'labels',
            'annotations' => 'annotations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  集群ID信息，仅在注册CCE导入集群时使用，其他类型集群无需填写。
    * name  CCE集群填写CCE集群名称，其他类型集群自定义
    * labels  标签信息。可为空，不为空时，必须满足kurbenetes label规范,最多可支持100个标签。
    * annotations  集群annotations信息。 附着集群必填一个kubeconfig字段，取值是kubeconfig文件的内容。kubeconfig文件获取方法请参见[获取KubeConfig文件](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0138.html)
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'name' => 'setName',
            'labels' => 'setLabels',
            'annotations' => 'setAnnotations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  集群ID信息，仅在注册CCE导入集群时使用，其他类型集群无需填写。
    * name  CCE集群填写CCE集群名称，其他类型集群自定义
    * labels  标签信息。可为空，不为空时，必须满足kurbenetes label规范,最多可支持100个标签。
    * annotations  集群annotations信息。 附着集群必填一个kubeconfig字段，取值是kubeconfig文件的内容。kubeconfig文件获取方法请参见[获取KubeConfig文件](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0138.html)
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'name' => 'getName',
            'labels' => 'getLabels',
            'annotations' => 'getAnnotations'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets uid
    *  集群ID信息，仅在注册CCE导入集群时使用，其他类型集群无需填写。
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 集群ID信息，仅在注册CCE导入集群时使用，其他类型集群无需填写。
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets name
    *  CCE集群填写CCE集群名称，其他类型集群自定义
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name CCE集群填写CCE集群名称，其他类型集群自定义
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets labels
    *  标签信息。可为空，不为空时，必须满足kurbenetes label规范,最多可支持100个标签。
    *
    * @return map[string,string]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,string]|null $labels 标签信息。可为空，不为空时，必须满足kurbenetes label规范,最多可支持100个标签。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets annotations
    *  集群annotations信息。 附着集群必填一个kubeconfig字段，取值是kubeconfig文件的内容。kubeconfig文件获取方法请参见[获取KubeConfig文件](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0138.html)
    *
    * @return map[string,string]|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param map[string,string]|null $annotations 集群annotations信息。 附着集群必填一个kubeconfig字段，取值是kubeconfig文件的内容。kubeconfig文件获取方法请参见[获取KubeConfig文件](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0138.html)
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
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

