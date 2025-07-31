<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTaskRequestBodyIacScanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTaskRequestBody_iac_scan_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * fileIdList  需要扫描的文件id列表，可以从文件上传接口“/v5/{project_id}/common/files/batch-upload”的响应数据中获取上传成功的文件id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileType' => 'string',
            'fileIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * fileIdList  需要扫描的文件id列表，可以从文件上传接口“/v5/{project_id}/common/files/batch-upload”的响应数据中获取上传成功的文件id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileType' => null,
        'fileIdList' => null
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
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * fileIdList  需要扫描的文件id列表，可以从文件上传接口“/v5/{project_id}/common/files/batch-upload”的响应数据中获取上传成功的文件id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileType' => 'file_type',
            'fileIdList' => 'file_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * fileIdList  需要扫描的文件id列表，可以从文件上传接口“/v5/{project_id}/common/files/batch-upload”的响应数据中获取上传成功的文件id
    *
    * @var string[]
    */
    protected static $setters = [
            'fileType' => 'setFileType',
            'fileIdList' => 'setFileIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * fileIdList  需要扫描的文件id列表，可以从文件上传接口“/v5/{project_id}/common/files/batch-upload”的响应数据中获取上传成功的文件id
    *
    * @var string[]
    */
    protected static $getters = [
            'fileType' => 'getFileType',
            'fileIdList' => 'getFileIdList'
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
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['fileIdList'] = isset($data['fileIdList']) ? $data['fileIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fileType'] === null) {
            $invalidProperties[] = "'fileType' can't be null";
        }
            if ((mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^dockerfile|k8s_yaml$/", $this->container['fileType'])) {
                $invalidProperties[] = "invalid value for 'fileType', must be conform to the pattern /^dockerfile|k8s_yaml$/.";
            }
        if ($this->container['fileIdList'] === null) {
            $invalidProperties[] = "'fileIdList' can't be null";
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
    * Gets fileType
    *  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    *
    * @return string
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string $fileType 文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets fileIdList
    *  需要扫描的文件id列表，可以从文件上传接口“/v5/{project_id}/common/files/batch-upload”的响应数据中获取上传成功的文件id
    *
    * @return string[]
    */
    public function getFileIdList()
    {
        return $this->container['fileIdList'];
    }

    /**
    * Sets fileIdList
    *
    * @param string[] $fileIdList 需要扫描的文件id列表，可以从文件上传接口“/v5/{project_id}/common/files/batch-upload”的响应数据中获取上传成功的文件id
    *
    * @return $this
    */
    public function setFileIdList($fileIdList)
    {
        $this->container['fileIdList'] = $fileIdList;
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

