<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creatorIds  创建人
    * ownerIds  所属人
    * ranks  级别
    * releaseIds  releaseId
    * status  状态
    * moduleIds  级别
    * results  结果
    * labelIds  标签
    * startTime  开始时间
    * endTime  结束时间
    * isAssociateIssue  是否关联需求
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creatorIds' => 'string',
            'ownerIds' => 'string',
            'ranks' => 'string',
            'releaseIds' => 'string',
            'status' => 'string',
            'moduleIds' => 'string',
            'results' => 'string',
            'labelIds' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'isAssociateIssue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creatorIds  创建人
    * ownerIds  所属人
    * ranks  级别
    * releaseIds  releaseId
    * status  状态
    * moduleIds  级别
    * results  结果
    * labelIds  标签
    * startTime  开始时间
    * endTime  结束时间
    * isAssociateIssue  是否关联需求
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creatorIds' => null,
        'ownerIds' => null,
        'ranks' => null,
        'releaseIds' => null,
        'status' => null,
        'moduleIds' => null,
        'results' => null,
        'labelIds' => null,
        'startTime' => null,
        'endTime' => null,
        'isAssociateIssue' => null
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
    * creatorIds  创建人
    * ownerIds  所属人
    * ranks  级别
    * releaseIds  releaseId
    * status  状态
    * moduleIds  级别
    * results  结果
    * labelIds  标签
    * startTime  开始时间
    * endTime  结束时间
    * isAssociateIssue  是否关联需求
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creatorIds' => 'creatorIds',
            'ownerIds' => 'ownerIds',
            'ranks' => 'ranks',
            'releaseIds' => 'releaseIds',
            'status' => 'status',
            'moduleIds' => 'moduleIds',
            'results' => 'results',
            'labelIds' => 'labelIds',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'isAssociateIssue' => 'isAssociateIssue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creatorIds  创建人
    * ownerIds  所属人
    * ranks  级别
    * releaseIds  releaseId
    * status  状态
    * moduleIds  级别
    * results  结果
    * labelIds  标签
    * startTime  开始时间
    * endTime  结束时间
    * isAssociateIssue  是否关联需求
    *
    * @var string[]
    */
    protected static $setters = [
            'creatorIds' => 'setCreatorIds',
            'ownerIds' => 'setOwnerIds',
            'ranks' => 'setRanks',
            'releaseIds' => 'setReleaseIds',
            'status' => 'setStatus',
            'moduleIds' => 'setModuleIds',
            'results' => 'setResults',
            'labelIds' => 'setLabelIds',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'isAssociateIssue' => 'setIsAssociateIssue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creatorIds  创建人
    * ownerIds  所属人
    * ranks  级别
    * releaseIds  releaseId
    * status  状态
    * moduleIds  级别
    * results  结果
    * labelIds  标签
    * startTime  开始时间
    * endTime  结束时间
    * isAssociateIssue  是否关联需求
    *
    * @var string[]
    */
    protected static $getters = [
            'creatorIds' => 'getCreatorIds',
            'ownerIds' => 'getOwnerIds',
            'ranks' => 'getRanks',
            'releaseIds' => 'getReleaseIds',
            'status' => 'getStatus',
            'moduleIds' => 'getModuleIds',
            'results' => 'getResults',
            'labelIds' => 'getLabelIds',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'isAssociateIssue' => 'getIsAssociateIssue'
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
        $this->container['creatorIds'] = isset($data['creatorIds']) ? $data['creatorIds'] : null;
        $this->container['ownerIds'] = isset($data['ownerIds']) ? $data['ownerIds'] : null;
        $this->container['ranks'] = isset($data['ranks']) ? $data['ranks'] : null;
        $this->container['releaseIds'] = isset($data['releaseIds']) ? $data['releaseIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['moduleIds'] = isset($data['moduleIds']) ? $data['moduleIds'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['labelIds'] = isset($data['labelIds']) ? $data['labelIds'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['isAssociateIssue'] = isset($data['isAssociateIssue']) ? $data['isAssociateIssue'] : null;
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
    * Gets creatorIds
    *  创建人
    *
    * @return string|null
    */
    public function getCreatorIds()
    {
        return $this->container['creatorIds'];
    }

    /**
    * Sets creatorIds
    *
    * @param string|null $creatorIds 创建人
    *
    * @return $this
    */
    public function setCreatorIds($creatorIds)
    {
        $this->container['creatorIds'] = $creatorIds;
        return $this;
    }

    /**
    * Gets ownerIds
    *  所属人
    *
    * @return string|null
    */
    public function getOwnerIds()
    {
        return $this->container['ownerIds'];
    }

    /**
    * Sets ownerIds
    *
    * @param string|null $ownerIds 所属人
    *
    * @return $this
    */
    public function setOwnerIds($ownerIds)
    {
        $this->container['ownerIds'] = $ownerIds;
        return $this;
    }

    /**
    * Gets ranks
    *  级别
    *
    * @return string|null
    */
    public function getRanks()
    {
        return $this->container['ranks'];
    }

    /**
    * Sets ranks
    *
    * @param string|null $ranks 级别
    *
    * @return $this
    */
    public function setRanks($ranks)
    {
        $this->container['ranks'] = $ranks;
        return $this;
    }

    /**
    * Gets releaseIds
    *  releaseId
    *
    * @return string|null
    */
    public function getReleaseIds()
    {
        return $this->container['releaseIds'];
    }

    /**
    * Sets releaseIds
    *
    * @param string|null $releaseIds releaseId
    *
    * @return $this
    */
    public function setReleaseIds($releaseIds)
    {
        $this->container['releaseIds'] = $releaseIds;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets moduleIds
    *  级别
    *
    * @return string|null
    */
    public function getModuleIds()
    {
        return $this->container['moduleIds'];
    }

    /**
    * Sets moduleIds
    *
    * @param string|null $moduleIds 级别
    *
    * @return $this
    */
    public function setModuleIds($moduleIds)
    {
        $this->container['moduleIds'] = $moduleIds;
        return $this;
    }

    /**
    * Gets results
    *  结果
    *
    * @return string|null
    */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
    * Sets results
    *
    * @param string|null $results 结果
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
        return $this;
    }

    /**
    * Gets labelIds
    *  标签
    *
    * @return string|null
    */
    public function getLabelIds()
    {
        return $this->container['labelIds'];
    }

    /**
    * Sets labelIds
    *
    * @param string|null $labelIds 标签
    *
    * @return $this
    */
    public function setLabelIds($labelIds)
    {
        $this->container['labelIds'] = $labelIds;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets isAssociateIssue
    *  是否关联需求
    *
    * @return string|null
    */
    public function getIsAssociateIssue()
    {
        return $this->container['isAssociateIssue'];
    }

    /**
    * Sets isAssociateIssue
    *
    * @param string|null $isAssociateIssue 是否关联需求
    *
    * @return $this
    */
    public function setIsAssociateIssue($isAssociateIssue)
    {
        $this->container['isAssociateIssue'] = $isAssociateIssue;
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

