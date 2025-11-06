<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryAlarmRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryAlarmRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * name  作业/规则名称。
    * remindType  通知类型：  - 0：运行成功。 - 1：运行异常/失败。 - 3：未完成。 - 4：资源繁忙。 - 5：基线任务异常。 - 6：基线预警。 - 7：基线破线。 - 8：基线加剧。 - 9：保障作业预警时间未完成。 - 10：保障作业承诺时间未完成。 - 11：保障作业失败。 - 12：周期未完成。 - 13：运行取消。 - 14：失败作业重跑成功。 - 15：作业改动。 默认查询所有状态。
    * dingName  钉钉机器人名称。
    * offset  分页列表的页数，默认值为0。取值范围大于等于0。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100]，默认为10。  默认值：10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'xProjectId' => 'string',
            'contentType' => 'string',
            'name' => 'string',
            'remindType' => 'int',
            'dingName' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * name  作业/规则名称。
    * remindType  通知类型：  - 0：运行成功。 - 1：运行异常/失败。 - 3：未完成。 - 4：资源繁忙。 - 5：基线任务异常。 - 6：基线预警。 - 7：基线破线。 - 8：基线加剧。 - 9：保障作业预警时间未完成。 - 10：保障作业承诺时间未完成。 - 11：保障作业失败。 - 12：周期未完成。 - 13：运行取消。 - 14：失败作业重跑成功。 - 15：作业改动。 默认查询所有状态。
    * dingName  钉钉机器人名称。
    * offset  分页列表的页数，默认值为0。取值范围大于等于0。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100]，默认为10。  默认值：10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'xProjectId' => null,
        'contentType' => null,
        'name' => null,
        'remindType' => 'int32',
        'dingName' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * name  作业/规则名称。
    * remindType  通知类型：  - 0：运行成功。 - 1：运行异常/失败。 - 3：未完成。 - 4：资源繁忙。 - 5：基线任务异常。 - 6：基线预警。 - 7：基线破线。 - 8：基线加剧。 - 9：保障作业预警时间未完成。 - 10：保障作业承诺时间未完成。 - 11：保障作业失败。 - 12：周期未完成。 - 13：运行取消。 - 14：失败作业重跑成功。 - 15：作业改动。 默认查询所有状态。
    * dingName  钉钉机器人名称。
    * offset  分页列表的页数，默认值为0。取值范围大于等于0。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100]，默认为10。  默认值：10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'xProjectId' => 'X-Project-Id',
            'contentType' => 'Content-Type',
            'name' => 'name',
            'remindType' => 'remind_type',
            'dingName' => 'ding_name',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * name  作业/规则名称。
    * remindType  通知类型：  - 0：运行成功。 - 1：运行异常/失败。 - 3：未完成。 - 4：资源繁忙。 - 5：基线任务异常。 - 6：基线预警。 - 7：基线破线。 - 8：基线加剧。 - 9：保障作业预警时间未完成。 - 10：保障作业承诺时间未完成。 - 11：保障作业失败。 - 12：周期未完成。 - 13：运行取消。 - 14：失败作业重跑成功。 - 15：作业改动。 默认查询所有状态。
    * dingName  钉钉机器人名称。
    * offset  分页列表的页数，默认值为0。取值范围大于等于0。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100]，默认为10。  默认值：10
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'xProjectId' => 'setXProjectId',
            'contentType' => 'setContentType',
            'name' => 'setName',
            'remindType' => 'setRemindType',
            'dingName' => 'setDingName',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * name  作业/规则名称。
    * remindType  通知类型：  - 0：运行成功。 - 1：运行异常/失败。 - 3：未完成。 - 4：资源繁忙。 - 5：基线任务异常。 - 6：基线预警。 - 7：基线破线。 - 8：基线加剧。 - 9：保障作业预警时间未完成。 - 10：保障作业承诺时间未完成。 - 11：保障作业失败。 - 12：周期未完成。 - 13：运行取消。 - 14：失败作业重跑成功。 - 15：作业改动。 默认查询所有状态。
    * dingName  钉钉机器人名称。
    * offset  分页列表的页数，默认值为0。取值范围大于等于0。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100]，默认为10。  默认值：10
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'xProjectId' => 'getXProjectId',
            'contentType' => 'getContentType',
            'name' => 'getName',
            'remindType' => 'getRemindType',
            'dingName' => 'getDingName',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['remindType'] = isset($data['remindType']) ? $data['remindType'] : null;
        $this->container['dingName'] = isset($data['dingName']) ? $data['dingName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 3)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) < 3)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 3.";
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets contentType
    *  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets name
    *  作业/规则名称。
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
    * @param string|null $name 作业/规则名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets remindType
    *  通知类型：  - 0：运行成功。 - 1：运行异常/失败。 - 3：未完成。 - 4：资源繁忙。 - 5：基线任务异常。 - 6：基线预警。 - 7：基线破线。 - 8：基线加剧。 - 9：保障作业预警时间未完成。 - 10：保障作业承诺时间未完成。 - 11：保障作业失败。 - 12：周期未完成。 - 13：运行取消。 - 14：失败作业重跑成功。 - 15：作业改动。 默认查询所有状态。
    *
    * @return int|null
    */
    public function getRemindType()
    {
        return $this->container['remindType'];
    }

    /**
    * Sets remindType
    *
    * @param int|null $remindType 通知类型：  - 0：运行成功。 - 1：运行异常/失败。 - 3：未完成。 - 4：资源繁忙。 - 5：基线任务异常。 - 6：基线预警。 - 7：基线破线。 - 8：基线加剧。 - 9：保障作业预警时间未完成。 - 10：保障作业承诺时间未完成。 - 11：保障作业失败。 - 12：周期未完成。 - 13：运行取消。 - 14：失败作业重跑成功。 - 15：作业改动。 默认查询所有状态。
    *
    * @return $this
    */
    public function setRemindType($remindType)
    {
        $this->container['remindType'] = $remindType;
        return $this;
    }

    /**
    * Gets dingName
    *  钉钉机器人名称。
    *
    * @return string|null
    */
    public function getDingName()
    {
        return $this->container['dingName'];
    }

    /**
    * Sets dingName
    *
    * @param string|null $dingName 钉钉机器人名称。
    *
    * @return $this
    */
    public function setDingName($dingName)
    {
        $this->container['dingName'] = $dingName;
        return $this;
    }

    /**
    * Gets offset
    *  分页列表的页数，默认值为0。取值范围大于等于0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页列表的页数，默认值为0。取值范围大于等于0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页返回结果，指定每页最大记录数。范围[1,100]，默认为10。  默认值：10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页返回结果，指定每页最大记录数。范围[1,100]，默认为10。  默认值：10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

