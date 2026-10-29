<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskInfoByIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskInfoByIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * mergeId  **参数解释：** 合并请求ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * jobId  **参数解释：** 执行记录ID，即每一次执行版本级或门禁级扫描的唯一ID。通过[[执行检查任务](https://support.huaweicloud.com/api-codecheck/RunTaskV2.html)](tag:hws)[[执行检查任务](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/RunTaskV2.html)](tag:hws_hk)[执行检查任务](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口的返回值可获取执行记录ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~64]个字符。 **默认取值：** 不涉及。
    * operator  **参数解释：** 操作者。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'mergeId' => 'string',
            'jobId' => 'string',
            'operator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * mergeId  **参数解释：** 合并请求ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * jobId  **参数解释：** 执行记录ID，即每一次执行版本级或门禁级扫描的唯一ID。通过[[执行检查任务](https://support.huaweicloud.com/api-codecheck/RunTaskV2.html)](tag:hws)[[执行检查任务](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/RunTaskV2.html)](tag:hws_hk)[执行检查任务](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口的返回值可获取执行记录ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~64]个字符。 **默认取值：** 不涉及。
    * operator  **参数解释：** 操作者。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'mergeId' => null,
        'jobId' => null,
        'operator' => null
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
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * mergeId  **参数解释：** 合并请求ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * jobId  **参数解释：** 执行记录ID，即每一次执行版本级或门禁级扫描的唯一ID。通过[[执行检查任务](https://support.huaweicloud.com/api-codecheck/RunTaskV2.html)](tag:hws)[[执行检查任务](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/RunTaskV2.html)](tag:hws_hk)[执行检查任务](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口的返回值可获取执行记录ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~64]个字符。 **默认取值：** 不涉及。
    * operator  **参数解释：** 操作者。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'mergeId' => 'merge_id',
            'jobId' => 'job_id',
            'operator' => 'operator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * mergeId  **参数解释：** 合并请求ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * jobId  **参数解释：** 执行记录ID，即每一次执行版本级或门禁级扫描的唯一ID。通过[[执行检查任务](https://support.huaweicloud.com/api-codecheck/RunTaskV2.html)](tag:hws)[[执行检查任务](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/RunTaskV2.html)](tag:hws_hk)[执行检查任务](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口的返回值可获取执行记录ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~64]个字符。 **默认取值：** 不涉及。
    * operator  **参数解释：** 操作者。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'mergeId' => 'setMergeId',
            'jobId' => 'setJobId',
            'operator' => 'setOperator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * mergeId  **参数解释：** 合并请求ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * jobId  **参数解释：** 执行记录ID，即每一次执行版本级或门禁级扫描的唯一ID。通过[[执行检查任务](https://support.huaweicloud.com/api-codecheck/RunTaskV2.html)](tag:hws)[[执行检查任务](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/RunTaskV2.html)](tag:hws_hk)[执行检查任务](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口的返回值可获取执行记录ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~64]个字符。 **默认取值：** 不涉及。
    * operator  **参数解释：** 操作者。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'mergeId' => 'getMergeId',
            'jobId' => 'getJobId',
            'operator' => 'getOperator'
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
        $this->container['mergeId'] = isset($data['mergeId']) ? $data['mergeId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if ((mb_strlen($this->container['taskId']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets mergeId
    *  **参数解释：** 合并请求ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getMergeId()
    {
        return $this->container['mergeId'];
    }

    /**
    * Sets mergeId
    *
    * @param string|null $mergeId **参数解释：** 合并请求ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMergeId($mergeId)
    {
        $this->container['mergeId'] = $mergeId;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释：** 执行记录ID，即每一次执行版本级或门禁级扫描的唯一ID。通过[[执行检查任务](https://support.huaweicloud.com/api-codecheck/RunTaskV2.html)](tag:hws)[[执行检查任务](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/RunTaskV2.html)](tag:hws_hk)[执行检查任务](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口的返回值可获取执行记录ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~64]个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释：** 执行记录ID，即每一次执行版本级或门禁级扫描的唯一ID。通过[[执行检查任务](https://support.huaweicloud.com/api-codecheck/RunTaskV2.html)](tag:hws)[[执行检查任务](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/RunTaskV2.html)](tag:hws_hk)[执行检查任务](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口的返回值可获取执行记录ID。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~64]个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释：** 操作者。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator **参数解释：** 操作者。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
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

