<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUploadFilesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUploadFilesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uploadType  **参数解释**: 上传文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。 - k8s_yaml：k8s yaml文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。  **默认取值**: 不涉及
    * files  **参数解释**: 上传的文件，支持批量上传 **约束限制**: 上传文件需要与upload_type的类型对应 **取值范围**: 单文件支持最大1M，10个。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uploadType' => 'string',
            'files' => '\HuaweiCloud\SDK\Hss\V5\Model\MultipartFile[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uploadType  **参数解释**: 上传文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。 - k8s_yaml：k8s yaml文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。  **默认取值**: 不涉及
    * files  **参数解释**: 上传的文件，支持批量上传 **约束限制**: 上传文件需要与upload_type的类型对应 **取值范围**: 单文件支持最大1M，10个。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uploadType' => null,
        'files' => null
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
    * uploadType  **参数解释**: 上传文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。 - k8s_yaml：k8s yaml文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。  **默认取值**: 不涉及
    * files  **参数解释**: 上传的文件，支持批量上传 **约束限制**: 上传文件需要与upload_type的类型对应 **取值范围**: 单文件支持最大1M，10个。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uploadType' => 'upload_type',
            'files' => 'files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uploadType  **参数解释**: 上传文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。 - k8s_yaml：k8s yaml文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。  **默认取值**: 不涉及
    * files  **参数解释**: 上传的文件，支持批量上传 **约束限制**: 上传文件需要与upload_type的类型对应 **取值范围**: 单文件支持最大1M，10个。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'uploadType' => 'setUploadType',
            'files' => 'setFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uploadType  **参数解释**: 上传文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。 - k8s_yaml：k8s yaml文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。  **默认取值**: 不涉及
    * files  **参数解释**: 上传的文件，支持批量上传 **约束限制**: 上传文件需要与upload_type的类型对应 **取值范围**: 单文件支持最大1M，10个。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'uploadType' => 'getUploadType',
            'files' => 'getFiles'
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
        $this->container['uploadType'] = isset($data['uploadType']) ? $data['uploadType'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['uploadType'] === null) {
            $invalidProperties[] = "'uploadType' can't be null";
        }
            if ((mb_strlen($this->container['uploadType']) > 64)) {
                $invalidProperties[] = "invalid value for 'uploadType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['uploadType']) < 1)) {
                $invalidProperties[] = "invalid value for 'uploadType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^dockerfile|k8s_yaml$/", $this->container['uploadType'])) {
                $invalidProperties[] = "invalid value for 'uploadType', must be conform to the pattern /^dockerfile|k8s_yaml$/.";
            }
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files' can't be null";
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
    * Gets uploadType
    *  **参数解释**: 上传文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。 - k8s_yaml：k8s yaml文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getUploadType()
    {
        return $this->container['uploadType'];
    }

    /**
    * Sets uploadType
    *
    * @param string $uploadType **参数解释**: 上传文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。 - k8s_yaml：k8s yaml文件。如果所有文件上传成功，接口返回文件名称和文件ID列表，服务保存上传的文件。如果批量上传的文件中存在上传失败的文件，接口返回上传成功和失败的文件信息，所有文件都不会被服务保存。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setUploadType($uploadType)
    {
        $this->container['uploadType'] = $uploadType;
        return $this;
    }

    /**
    * Gets files
    *  **参数解释**: 上传的文件，支持批量上传 **约束限制**: 上传文件需要与upload_type的类型对应 **取值范围**: 单文件支持最大1M，10个。  **默认取值**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\MultipartFile[]
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\MultipartFile[] $files **参数解释**: 上传的文件，支持批量上传 **约束限制**: 上传文件需要与upload_type的类型对应 **取值范围**: 单文件支持最大1M，10个。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
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

