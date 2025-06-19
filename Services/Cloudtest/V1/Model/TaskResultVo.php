<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskResultVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskResultVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  结果URI
    * name  测试套名称
    * taskUri  任务uri
    * description  描述
    * owner  责任人
    * ownerName  责任人名称
    * releaseDev  发布版本号
    * versionUri  分支/迭代uri
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * updator  更新人
    * updatorName  更新人名称
    * updateTime  更新人名称
    * startTime  开始时间
    * endTime  结束时间
    * resultName  测试结果名称
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'taskUri' => 'string',
            'description' => 'string',
            'owner' => 'string',
            'ownerName' => 'string',
            'releaseDev' => 'string',
            'versionUri' => 'string',
            'creator' => 'string',
            'creatorName' => 'string',
            'createTime' => 'string',
            'updator' => 'string',
            'updatorName' => 'string',
            'updateTime' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'resultName' => 'string',
            'projectUuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  结果URI
    * name  测试套名称
    * taskUri  任务uri
    * description  描述
    * owner  责任人
    * ownerName  责任人名称
    * releaseDev  发布版本号
    * versionUri  分支/迭代uri
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * updator  更新人
    * updatorName  更新人名称
    * updateTime  更新人名称
    * startTime  开始时间
    * endTime  结束时间
    * resultName  测试结果名称
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'taskUri' => null,
        'description' => null,
        'owner' => null,
        'ownerName' => null,
        'releaseDev' => null,
        'versionUri' => null,
        'creator' => null,
        'creatorName' => null,
        'createTime' => null,
        'updator' => null,
        'updatorName' => null,
        'updateTime' => null,
        'startTime' => null,
        'endTime' => null,
        'resultName' => null,
        'projectUuid' => null
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
    * uri  结果URI
    * name  测试套名称
    * taskUri  任务uri
    * description  描述
    * owner  责任人
    * ownerName  责任人名称
    * releaseDev  发布版本号
    * versionUri  分支/迭代uri
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * updator  更新人
    * updatorName  更新人名称
    * updateTime  更新人名称
    * startTime  开始时间
    * endTime  结束时间
    * resultName  测试结果名称
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'taskUri' => 'task_uri',
            'description' => 'description',
            'owner' => 'owner',
            'ownerName' => 'owner_name',
            'releaseDev' => 'release_dev',
            'versionUri' => 'version_uri',
            'creator' => 'creator',
            'creatorName' => 'creator_name',
            'createTime' => 'create_time',
            'updator' => 'updator',
            'updatorName' => 'updator_name',
            'updateTime' => 'update_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'resultName' => 'result_name',
            'projectUuid' => 'project_uuid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  结果URI
    * name  测试套名称
    * taskUri  任务uri
    * description  描述
    * owner  责任人
    * ownerName  责任人名称
    * releaseDev  发布版本号
    * versionUri  分支/迭代uri
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * updator  更新人
    * updatorName  更新人名称
    * updateTime  更新人名称
    * startTime  开始时间
    * endTime  结束时间
    * resultName  测试结果名称
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'taskUri' => 'setTaskUri',
            'description' => 'setDescription',
            'owner' => 'setOwner',
            'ownerName' => 'setOwnerName',
            'releaseDev' => 'setReleaseDev',
            'versionUri' => 'setVersionUri',
            'creator' => 'setCreator',
            'creatorName' => 'setCreatorName',
            'createTime' => 'setCreateTime',
            'updator' => 'setUpdator',
            'updatorName' => 'setUpdatorName',
            'updateTime' => 'setUpdateTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'resultName' => 'setResultName',
            'projectUuid' => 'setProjectUuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  结果URI
    * name  测试套名称
    * taskUri  任务uri
    * description  描述
    * owner  责任人
    * ownerName  责任人名称
    * releaseDev  发布版本号
    * versionUri  分支/迭代uri
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * updator  更新人
    * updatorName  更新人名称
    * updateTime  更新人名称
    * startTime  开始时间
    * endTime  结束时间
    * resultName  测试结果名称
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'taskUri' => 'getTaskUri',
            'description' => 'getDescription',
            'owner' => 'getOwner',
            'ownerName' => 'getOwnerName',
            'releaseDev' => 'getReleaseDev',
            'versionUri' => 'getVersionUri',
            'creator' => 'getCreator',
            'creatorName' => 'getCreatorName',
            'createTime' => 'getCreateTime',
            'updator' => 'getUpdator',
            'updatorName' => 'getUpdatorName',
            'updateTime' => 'getUpdateTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'resultName' => 'getResultName',
            'projectUuid' => 'getProjectUuid'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['updatorName'] = isset($data['updatorName']) ? $data['updatorName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['resultName'] = isset($data['resultName']) ? $data['resultName'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
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
    * Gets uri
    *  结果URI
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 结果URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets name
    *  测试套名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 测试套名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets taskUri
    *  任务uri
    *
    * @return string|null
    */
    public function getTaskUri()
    {
        return $this->container['taskUri'];
    }

    /**
    * Sets taskUri
    *
    * @param string|null $taskUri 任务uri
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets owner
    *  责任人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人名称
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 责任人名称
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets releaseDev
    *  发布版本号
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 发布版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets versionUri
    *  分支/迭代uri
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 分支/迭代uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets creator
    *  创建人id
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人id
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updator
    *  更新人
    *
    * @return string|null
    */
    public function getUpdator()
    {
        return $this->container['updator'];
    }

    /**
    * Sets updator
    *
    * @param string|null $updator 更新人
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets updatorName
    *  更新人名称
    *
    * @return string|null
    */
    public function getUpdatorName()
    {
        return $this->container['updatorName'];
    }

    /**
    * Sets updatorName
    *
    * @param string|null $updatorName 更新人名称
    *
    * @return $this
    */
    public function setUpdatorName($updatorName)
    {
        $this->container['updatorName'] = $updatorName;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新人名称
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
    * @param string|null $updateTime 更新人名称
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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
    * Gets resultName
    *  测试结果名称
    *
    * @return string|null
    */
    public function getResultName()
    {
        return $this->container['resultName'];
    }

    /**
    * Sets resultName
    *
    * @param string|null $resultName 测试结果名称
    *
    * @return $this
    */
    public function setResultName($resultName)
    {
        $this->container['resultName'] = $resultName;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
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

