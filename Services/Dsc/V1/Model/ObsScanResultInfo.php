<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsScanResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsScanResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * bucketId  OBS桶ID
    * bucketName  OBS桶名称
    * filePath  文件路径
    * fileName  文件名
    * md5  文件md5值
    * riskLevel  风险等级
    * sensitiveDataType  风险数据类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'bucketId' => 'string',
            'bucketName' => 'string',
            'filePath' => 'string',
            'fileName' => 'string',
            'md5' => 'string',
            'riskLevel' => 'int',
            'sensitiveDataType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * bucketId  OBS桶ID
    * bucketName  OBS桶名称
    * filePath  文件路径
    * fileName  文件名
    * md5  文件md5值
    * riskLevel  风险等级
    * sensitiveDataType  风险数据类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'bucketId' => null,
        'bucketName' => null,
        'filePath' => null,
        'fileName' => null,
        'md5' => null,
        'riskLevel' => 'int32',
        'sensitiveDataType' => null
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
    * taskId  任务ID
    * bucketId  OBS桶ID
    * bucketName  OBS桶名称
    * filePath  文件路径
    * fileName  文件名
    * md5  文件md5值
    * riskLevel  风险等级
    * sensitiveDataType  风险数据类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'bucketId' => 'bucket_id',
            'bucketName' => 'bucket_name',
            'filePath' => 'file_path',
            'fileName' => 'file_name',
            'md5' => 'md5',
            'riskLevel' => 'risk_level',
            'sensitiveDataType' => 'sensitive_data_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * bucketId  OBS桶ID
    * bucketName  OBS桶名称
    * filePath  文件路径
    * fileName  文件名
    * md5  文件md5值
    * riskLevel  风险等级
    * sensitiveDataType  风险数据类型
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'bucketId' => 'setBucketId',
            'bucketName' => 'setBucketName',
            'filePath' => 'setFilePath',
            'fileName' => 'setFileName',
            'md5' => 'setMd5',
            'riskLevel' => 'setRiskLevel',
            'sensitiveDataType' => 'setSensitiveDataType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * bucketId  OBS桶ID
    * bucketName  OBS桶名称
    * filePath  文件路径
    * fileName  文件名
    * md5  文件md5值
    * riskLevel  风险等级
    * sensitiveDataType  风险数据类型
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'bucketId' => 'getBucketId',
            'bucketName' => 'getBucketName',
            'filePath' => 'getFilePath',
            'fileName' => 'getFileName',
            'md5' => 'getMd5',
            'riskLevel' => 'getRiskLevel',
            'sensitiveDataType' => 'getSensitiveDataType'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['bucketId'] = isset($data['bucketId']) ? $data['bucketId'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['sensitiveDataType'] = isset($data['sensitiveDataType']) ? $data['sensitiveDataType'] : null;
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
    * Gets taskId
    *  任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets bucketId
    *  OBS桶ID
    *
    * @return string|null
    */
    public function getBucketId()
    {
        return $this->container['bucketId'];
    }

    /**
    * Sets bucketId
    *
    * @param string|null $bucketId OBS桶ID
    *
    * @return $this
    */
    public function setBucketId($bucketId)
    {
        $this->container['bucketId'] = $bucketId;
        return $this;
    }

    /**
    * Gets bucketName
    *  OBS桶名称
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName OBS桶名称
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets md5
    *  文件md5值
    *
    * @return string|null
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string|null $md5 文件md5值
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险等级
    *
    * @return int|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param int|null $riskLevel 风险等级
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets sensitiveDataType
    *  风险数据类型
    *
    * @return string[]|null
    */
    public function getSensitiveDataType()
    {
        return $this->container['sensitiveDataType'];
    }

    /**
    * Sets sensitiveDataType
    *
    * @param string[]|null $sensitiveDataType 风险数据类型
    *
    * @return $this
    */
    public function setSensitiveDataType($sensitiveDataType)
    {
        $this->container['sensitiveDataType'] = $sensitiveDataType;
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

