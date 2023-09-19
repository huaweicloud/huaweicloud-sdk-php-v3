<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIkThesaurusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIkThesaurusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  加载状态。  - Loaded表示加载成功。 - Loading表示正在加载中。 - Failed表示加载失败。
    * bucket  存放词库文件的OBS桶。
    * mainObj  主词库文件对象。
    * stopObj  停词词库文件对象。
    * synonymObj  同义词词库文件对象。
    * updateTime  词库最近更新时间。
    * updateDetails  更新详情。
    * clusterId  指定配置自定义词库的集群ID。
    * operateStatus  操作状态。
    * id  词库的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'bucket' => 'string',
            'mainObj' => 'string',
            'stopObj' => 'string',
            'synonymObj' => 'string',
            'updateTime' => 'string',
            'updateDetails' => 'string',
            'clusterId' => 'string',
            'operateStatus' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  加载状态。  - Loaded表示加载成功。 - Loading表示正在加载中。 - Failed表示加载失败。
    * bucket  存放词库文件的OBS桶。
    * mainObj  主词库文件对象。
    * stopObj  停词词库文件对象。
    * synonymObj  同义词词库文件对象。
    * updateTime  词库最近更新时间。
    * updateDetails  更新详情。
    * clusterId  指定配置自定义词库的集群ID。
    * operateStatus  操作状态。
    * id  词库的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'bucket' => null,
        'mainObj' => null,
        'stopObj' => null,
        'synonymObj' => null,
        'updateTime' => null,
        'updateDetails' => null,
        'clusterId' => null,
        'operateStatus' => null,
        'id' => null
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
    * status  加载状态。  - Loaded表示加载成功。 - Loading表示正在加载中。 - Failed表示加载失败。
    * bucket  存放词库文件的OBS桶。
    * mainObj  主词库文件对象。
    * stopObj  停词词库文件对象。
    * synonymObj  同义词词库文件对象。
    * updateTime  词库最近更新时间。
    * updateDetails  更新详情。
    * clusterId  指定配置自定义词库的集群ID。
    * operateStatus  操作状态。
    * id  词库的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'bucket' => 'bucket',
            'mainObj' => 'mainObj',
            'stopObj' => 'stopObj',
            'synonymObj' => 'synonymObj',
            'updateTime' => 'updateTime',
            'updateDetails' => 'updateDetails',
            'clusterId' => 'clusterId',
            'operateStatus' => 'operateStatus',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  加载状态。  - Loaded表示加载成功。 - Loading表示正在加载中。 - Failed表示加载失败。
    * bucket  存放词库文件的OBS桶。
    * mainObj  主词库文件对象。
    * stopObj  停词词库文件对象。
    * synonymObj  同义词词库文件对象。
    * updateTime  词库最近更新时间。
    * updateDetails  更新详情。
    * clusterId  指定配置自定义词库的集群ID。
    * operateStatus  操作状态。
    * id  词库的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'bucket' => 'setBucket',
            'mainObj' => 'setMainObj',
            'stopObj' => 'setStopObj',
            'synonymObj' => 'setSynonymObj',
            'updateTime' => 'setUpdateTime',
            'updateDetails' => 'setUpdateDetails',
            'clusterId' => 'setClusterId',
            'operateStatus' => 'setOperateStatus',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  加载状态。  - Loaded表示加载成功。 - Loading表示正在加载中。 - Failed表示加载失败。
    * bucket  存放词库文件的OBS桶。
    * mainObj  主词库文件对象。
    * stopObj  停词词库文件对象。
    * synonymObj  同义词词库文件对象。
    * updateTime  词库最近更新时间。
    * updateDetails  更新详情。
    * clusterId  指定配置自定义词库的集群ID。
    * operateStatus  操作状态。
    * id  词库的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'bucket' => 'getBucket',
            'mainObj' => 'getMainObj',
            'stopObj' => 'getStopObj',
            'synonymObj' => 'getSynonymObj',
            'updateTime' => 'getUpdateTime',
            'updateDetails' => 'getUpdateDetails',
            'clusterId' => 'getClusterId',
            'operateStatus' => 'getOperateStatus',
            'id' => 'getId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['mainObj'] = isset($data['mainObj']) ? $data['mainObj'] : null;
        $this->container['stopObj'] = isset($data['stopObj']) ? $data['stopObj'] : null;
        $this->container['synonymObj'] = isset($data['synonymObj']) ? $data['synonymObj'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateDetails'] = isset($data['updateDetails']) ? $data['updateDetails'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['operateStatus'] = isset($data['operateStatus']) ? $data['operateStatus'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets status
    *  加载状态。  - Loaded表示加载成功。 - Loading表示正在加载中。 - Failed表示加载失败。
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
    * @param string|null $status 加载状态。  - Loaded表示加载成功。 - Loading表示正在加载中。 - Failed表示加载失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets bucket
    *  存放词库文件的OBS桶。
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 存放词库文件的OBS桶。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets mainObj
    *  主词库文件对象。
    *
    * @return string|null
    */
    public function getMainObj()
    {
        return $this->container['mainObj'];
    }

    /**
    * Sets mainObj
    *
    * @param string|null $mainObj 主词库文件对象。
    *
    * @return $this
    */
    public function setMainObj($mainObj)
    {
        $this->container['mainObj'] = $mainObj;
        return $this;
    }

    /**
    * Gets stopObj
    *  停词词库文件对象。
    *
    * @return string|null
    */
    public function getStopObj()
    {
        return $this->container['stopObj'];
    }

    /**
    * Sets stopObj
    *
    * @param string|null $stopObj 停词词库文件对象。
    *
    * @return $this
    */
    public function setStopObj($stopObj)
    {
        $this->container['stopObj'] = $stopObj;
        return $this;
    }

    /**
    * Gets synonymObj
    *  同义词词库文件对象。
    *
    * @return string|null
    */
    public function getSynonymObj()
    {
        return $this->container['synonymObj'];
    }

    /**
    * Sets synonymObj
    *
    * @param string|null $synonymObj 同义词词库文件对象。
    *
    * @return $this
    */
    public function setSynonymObj($synonymObj)
    {
        $this->container['synonymObj'] = $synonymObj;
        return $this;
    }

    /**
    * Gets updateTime
    *  词库最近更新时间。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 词库最近更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateDetails
    *  更新详情。
    *
    * @return string|null
    */
    public function getUpdateDetails()
    {
        return $this->container['updateDetails'];
    }

    /**
    * Sets updateDetails
    *
    * @param string|null $updateDetails 更新详情。
    *
    * @return $this
    */
    public function setUpdateDetails($updateDetails)
    {
        $this->container['updateDetails'] = $updateDetails;
        return $this;
    }

    /**
    * Gets clusterId
    *  指定配置自定义词库的集群ID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 指定配置自定义词库的集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets operateStatus
    *  操作状态。
    *
    * @return string|null
    */
    public function getOperateStatus()
    {
        return $this->container['operateStatus'];
    }

    /**
    * Sets operateStatus
    *
    * @param string|null $operateStatus 操作状态。
    *
    * @return $this
    */
    public function setOperateStatus($operateStatus)
    {
        $this->container['operateStatus'] = $operateStatus;
        return $this;
    }

    /**
    * Gets id
    *  词库的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 词库的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

