<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Workspacebody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Workspacebody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * id  工作空间id
    * isDefault  是否为默认空间，0为私有空间，1为默认空间，2为公共空间
    * ownerName  创建者名称
    * projectId  项目id
    * domainId  当前租户所属domain id
    * instanceId  当前工作空间所属实例id
    * createTime  创建时间
    * createUser  创建用户名称
    * memberNum  当前工作空间成员数量
    * updateTime  更新时间
    * updateUser  更新用户名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'badRecordLocationName' => 'string',
            'description' => 'string',
            'epsId' => 'string',
            'jobLogLocationName' => 'string',
            'name' => 'string',
            'id' => 'string',
            'isDefault' => 'int',
            'ownerName' => 'string',
            'projectId' => 'string',
            'domainId' => 'string',
            'instanceId' => 'string',
            'createTime' => 'float',
            'createUser' => 'string',
            'memberNum' => 'int',
            'updateTime' => 'float',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * id  工作空间id
    * isDefault  是否为默认空间，0为私有空间，1为默认空间，2为公共空间
    * ownerName  创建者名称
    * projectId  项目id
    * domainId  当前租户所属domain id
    * instanceId  当前工作空间所属实例id
    * createTime  创建时间
    * createUser  创建用户名称
    * memberNum  当前工作空间成员数量
    * updateTime  更新时间
    * updateUser  更新用户名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'badRecordLocationName' => null,
        'description' => null,
        'epsId' => null,
        'jobLogLocationName' => null,
        'name' => null,
        'id' => null,
        'isDefault' => null,
        'ownerName' => null,
        'projectId' => null,
        'domainId' => null,
        'instanceId' => null,
        'createTime' => null,
        'createUser' => null,
        'memberNum' => null,
        'updateTime' => null,
        'updateUser' => null
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
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * id  工作空间id
    * isDefault  是否为默认空间，0为私有空间，1为默认空间，2为公共空间
    * ownerName  创建者名称
    * projectId  项目id
    * domainId  当前租户所属domain id
    * instanceId  当前工作空间所属实例id
    * createTime  创建时间
    * createUser  创建用户名称
    * memberNum  当前工作空间成员数量
    * updateTime  更新时间
    * updateUser  更新用户名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'badRecordLocationName' => 'bad_record_location_name',
            'description' => 'description',
            'epsId' => 'eps_id',
            'jobLogLocationName' => 'job_log_location_name',
            'name' => 'name',
            'id' => 'id',
            'isDefault' => 'is_default',
            'ownerName' => 'owner_name',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'instanceId' => 'instance_id',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'memberNum' => 'member_num',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * id  工作空间id
    * isDefault  是否为默认空间，0为私有空间，1为默认空间，2为公共空间
    * ownerName  创建者名称
    * projectId  项目id
    * domainId  当前租户所属domain id
    * instanceId  当前工作空间所属实例id
    * createTime  创建时间
    * createUser  创建用户名称
    * memberNum  当前工作空间成员数量
    * updateTime  更新时间
    * updateUser  更新用户名称
    *
    * @var string[]
    */
    protected static $setters = [
            'badRecordLocationName' => 'setBadRecordLocationName',
            'description' => 'setDescription',
            'epsId' => 'setEpsId',
            'jobLogLocationName' => 'setJobLogLocationName',
            'name' => 'setName',
            'id' => 'setId',
            'isDefault' => 'setIsDefault',
            'ownerName' => 'setOwnerName',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'instanceId' => 'setInstanceId',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'memberNum' => 'setMemberNum',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * id  工作空间id
    * isDefault  是否为默认空间，0为私有空间，1为默认空间，2为公共空间
    * ownerName  创建者名称
    * projectId  项目id
    * domainId  当前租户所属domain id
    * instanceId  当前工作空间所属实例id
    * createTime  创建时间
    * createUser  创建用户名称
    * memberNum  当前工作空间成员数量
    * updateTime  更新时间
    * updateUser  更新用户名称
    *
    * @var string[]
    */
    protected static $getters = [
            'badRecordLocationName' => 'getBadRecordLocationName',
            'description' => 'getDescription',
            'epsId' => 'getEpsId',
            'jobLogLocationName' => 'getJobLogLocationName',
            'name' => 'getName',
            'id' => 'getId',
            'isDefault' => 'getIsDefault',
            'ownerName' => 'getOwnerName',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'instanceId' => 'getInstanceId',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'memberNum' => 'getMemberNum',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser'
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
        $this->container['badRecordLocationName'] = isset($data['badRecordLocationName']) ? $data['badRecordLocationName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['jobLogLocationName'] = isset($data['jobLogLocationName']) ? $data['jobLogLocationName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['memberNum'] = isset($data['memberNum']) ? $data['memberNum'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['badRecordLocationName']) && (mb_strlen($this->container['badRecordLocationName']) > 128)) {
                $invalidProperties[] = "invalid value for 'badRecordLocationName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['badRecordLocationName']) && (mb_strlen($this->container['badRecordLocationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'badRecordLocationName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['epsId']) && (mb_strlen($this->container['epsId']) > 1)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['epsId']) && (mb_strlen($this->container['epsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobLogLocationName']) && (mb_strlen($this->container['jobLogLocationName']) > 128)) {
                $invalidProperties[] = "invalid value for 'jobLogLocationName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['jobLogLocationName']) && (mb_strlen($this->container['jobLogLocationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobLogLocationName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberNum']) && ($this->container['memberNum'] > 100)) {
                $invalidProperties[] = "invalid value for 'memberNum', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['memberNum']) && ($this->container['memberNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'memberNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be bigger than or equal to 1.";
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
    * Gets badRecordLocationName
    *  DLI脏数据OBS路径
    *
    * @return string|null
    */
    public function getBadRecordLocationName()
    {
        return $this->container['badRecordLocationName'];
    }

    /**
    * Sets badRecordLocationName
    *
    * @param string|null $badRecordLocationName DLI脏数据OBS路径
    *
    * @return $this
    */
    public function setBadRecordLocationName($badRecordLocationName)
    {
        $this->container['badRecordLocationName'] = $badRecordLocationName;
        return $this;
    }

    /**
    * Gets description
    *  工作空间描述
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
    * @param string|null $description 工作空间描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets epsId
    *  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets jobLogLocationName
    *  作业日志OBS路径
    *
    * @return string|null
    */
    public function getJobLogLocationName()
    {
        return $this->container['jobLogLocationName'];
    }

    /**
    * Sets jobLogLocationName
    *
    * @param string|null $jobLogLocationName 作业日志OBS路径
    *
    * @return $this
    */
    public function setJobLogLocationName($jobLogLocationName)
    {
        $this->container['jobLogLocationName'] = $jobLogLocationName;
        return $this;
    }

    /**
    * Gets name
    *  工作空间名称
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
    * @param string|null $name 工作空间名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  工作空间id
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
    * @param string|null $id 工作空间id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否为默认空间，0为私有空间，1为默认空间，2为公共空间
    *
    * @return int|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param int|null $isDefault 是否为默认空间，0为私有空间，1为默认空间，2为公共空间
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets ownerName
    *  创建者名称
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
    * @param string|null $ownerName 创建者名称
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets domainId
    *  当前租户所属domain id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 当前租户所属domain id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets instanceId
    *  当前工作空间所属实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 当前工作空间所属实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return float|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param float|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  创建用户名称
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建用户名称
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets memberNum
    *  当前工作空间成员数量
    *
    * @return int|null
    */
    public function getMemberNum()
    {
        return $this->container['memberNum'];
    }

    /**
    * Sets memberNum
    *
    * @param int|null $memberNum 当前工作空间成员数量
    *
    * @return $this
    */
    public function setMemberNum($memberNum)
    {
        $this->container['memberNum'] = $memberNum;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return float|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param float|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新用户名称
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新用户名称
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
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

