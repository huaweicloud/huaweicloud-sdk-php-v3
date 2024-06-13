<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StreamEnvironmentConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StreamEnvironmentConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionAgencyUrn  自定义委托名，定义作业级访问权限。
    * imageFeature  表示用户作业使用的镜像类型。basic：表示使用 DLI 提供的基础镜像； custom：表示使用用户自定义的镜像。
    * imageUri  自定义镜像。当前只支持 SWR，格式为：组织名/镜像名:镜像版本。当用户设置“image_feature”为“custom”时，该参数生效。用户可通过与“image_feature”参数配合使用，指定作业运行使用自定义的镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * queueName  队列名称。长度限制：1-128个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionAgencyUrn' => 'string',
            'imageFeature' => 'string',
            'imageUri' => 'string',
            'queueName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionAgencyUrn  自定义委托名，定义作业级访问权限。
    * imageFeature  表示用户作业使用的镜像类型。basic：表示使用 DLI 提供的基础镜像； custom：表示使用用户自定义的镜像。
    * imageUri  自定义镜像。当前只支持 SWR，格式为：组织名/镜像名:镜像版本。当用户设置“image_feature”为“custom”时，该参数生效。用户可通过与“image_feature”参数配合使用，指定作业运行使用自定义的镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * queueName  队列名称。长度限制：1-128个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionAgencyUrn' => null,
        'imageFeature' => null,
        'imageUri' => null,
        'queueName' => null
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
    * executionAgencyUrn  自定义委托名，定义作业级访问权限。
    * imageFeature  表示用户作业使用的镜像类型。basic：表示使用 DLI 提供的基础镜像； custom：表示使用用户自定义的镜像。
    * imageUri  自定义镜像。当前只支持 SWR，格式为：组织名/镜像名:镜像版本。当用户设置“image_feature”为“custom”时，该参数生效。用户可通过与“image_feature”参数配合使用，指定作业运行使用自定义的镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * queueName  队列名称。长度限制：1-128个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionAgencyUrn' => 'execution_agency_urn',
            'imageFeature' => 'image_feature',
            'imageUri' => 'image_uri',
            'queueName' => 'queue_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionAgencyUrn  自定义委托名，定义作业级访问权限。
    * imageFeature  表示用户作业使用的镜像类型。basic：表示使用 DLI 提供的基础镜像； custom：表示使用用户自定义的镜像。
    * imageUri  自定义镜像。当前只支持 SWR，格式为：组织名/镜像名:镜像版本。当用户设置“image_feature”为“custom”时，该参数生效。用户可通过与“image_feature”参数配合使用，指定作业运行使用自定义的镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * queueName  队列名称。长度限制：1-128个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'executionAgencyUrn' => 'setExecutionAgencyUrn',
            'imageFeature' => 'setImageFeature',
            'imageUri' => 'setImageUri',
            'queueName' => 'setQueueName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionAgencyUrn  自定义委托名，定义作业级访问权限。
    * imageFeature  表示用户作业使用的镜像类型。basic：表示使用 DLI 提供的基础镜像； custom：表示使用用户自定义的镜像。
    * imageUri  自定义镜像。当前只支持 SWR，格式为：组织名/镜像名:镜像版本。当用户设置“image_feature”为“custom”时，该参数生效。用户可通过与“image_feature”参数配合使用，指定作业运行使用自定义的镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * queueName  队列名称。长度限制：1-128个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'executionAgencyUrn' => 'getExecutionAgencyUrn',
            'imageFeature' => 'getImageFeature',
            'imageUri' => 'getImageUri',
            'queueName' => 'getQueueName'
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
        $this->container['executionAgencyUrn'] = isset($data['executionAgencyUrn']) ? $data['executionAgencyUrn'] : null;
        $this->container['imageFeature'] = isset($data['imageFeature']) ? $data['imageFeature'] : null;
        $this->container['imageUri'] = isset($data['imageUri']) ? $data['imageUri'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) > 128)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) < 0)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be bigger than or equal to 0.";
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
    * Gets executionAgencyUrn
    *  自定义委托名，定义作业级访问权限。
    *
    * @return string|null
    */
    public function getExecutionAgencyUrn()
    {
        return $this->container['executionAgencyUrn'];
    }

    /**
    * Sets executionAgencyUrn
    *
    * @param string|null $executionAgencyUrn 自定义委托名，定义作业级访问权限。
    *
    * @return $this
    */
    public function setExecutionAgencyUrn($executionAgencyUrn)
    {
        $this->container['executionAgencyUrn'] = $executionAgencyUrn;
        return $this;
    }

    /**
    * Gets imageFeature
    *  表示用户作业使用的镜像类型。basic：表示使用 DLI 提供的基础镜像； custom：表示使用用户自定义的镜像。
    *
    * @return string|null
    */
    public function getImageFeature()
    {
        return $this->container['imageFeature'];
    }

    /**
    * Sets imageFeature
    *
    * @param string|null $imageFeature 表示用户作业使用的镜像类型。basic：表示使用 DLI 提供的基础镜像； custom：表示使用用户自定义的镜像。
    *
    * @return $this
    */
    public function setImageFeature($imageFeature)
    {
        $this->container['imageFeature'] = $imageFeature;
        return $this;
    }

    /**
    * Gets imageUri
    *  自定义镜像。当前只支持 SWR，格式为：组织名/镜像名:镜像版本。当用户设置“image_feature”为“custom”时，该参数生效。用户可通过与“image_feature”参数配合使用，指定作业运行使用自定义的镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    *
    * @return string|null
    */
    public function getImageUri()
    {
        return $this->container['imageUri'];
    }

    /**
    * Sets imageUri
    *
    * @param string|null $imageUri 自定义镜像。当前只支持 SWR，格式为：组织名/镜像名:镜像版本。当用户设置“image_feature”为“custom”时，该参数生效。用户可通过与“image_feature”参数配合使用，指定作业运行使用自定义的镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    *
    * @return $this
    */
    public function setImageUri($imageUri)
    {
        $this->container['imageUri'] = $imageUri;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。长度限制：1-128个字符。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称。长度限制：1-128个字符。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
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

