<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EstimateExecutionPlanPriceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EstimateExecutionPlanPriceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * projectId  项目ID，可以从调用API处获取，也可以从控制台获取。  获取方式：https://support.huaweicloud.com/api-ticket/ticket_api_20002.html
    * stackName  用户希望操作的资源栈名称
    * executionPlanName  执行计划的名字。
    * stackId  用户希望描述的资源栈的Id。若stack_name和stack_id同时存在，则资源编排服务会检查是否两个匹配，否则返回400
    * executionPlanId  执行计划ID(uuid)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientRequestId' => 'string',
            'projectId' => 'string',
            'stackName' => 'string',
            'executionPlanName' => 'string',
            'stackId' => 'string',
            'executionPlanId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * projectId  项目ID，可以从调用API处获取，也可以从控制台获取。  获取方式：https://support.huaweicloud.com/api-ticket/ticket_api_20002.html
    * stackName  用户希望操作的资源栈名称
    * executionPlanName  执行计划的名字。
    * stackId  用户希望描述的资源栈的Id。若stack_name和stack_id同时存在，则资源编排服务会检查是否两个匹配，否则返回400
    * executionPlanId  执行计划ID(uuid)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientRequestId' => null,
        'projectId' => null,
        'stackName' => null,
        'executionPlanName' => null,
        'stackId' => null,
        'executionPlanId' => null
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
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * projectId  项目ID，可以从调用API处获取，也可以从控制台获取。  获取方式：https://support.huaweicloud.com/api-ticket/ticket_api_20002.html
    * stackName  用户希望操作的资源栈名称
    * executionPlanName  执行计划的名字。
    * stackId  用户希望描述的资源栈的Id。若stack_name和stack_id同时存在，则资源编排服务会检查是否两个匹配，否则返回400
    * executionPlanId  执行计划ID(uuid)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientRequestId' => 'Client-Request-Id',
            'projectId' => 'project_id',
            'stackName' => 'stack_name',
            'executionPlanName' => 'execution_plan_name',
            'stackId' => 'stack_id',
            'executionPlanId' => 'execution_plan_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * projectId  项目ID，可以从调用API处获取，也可以从控制台获取。  获取方式：https://support.huaweicloud.com/api-ticket/ticket_api_20002.html
    * stackName  用户希望操作的资源栈名称
    * executionPlanName  执行计划的名字。
    * stackId  用户希望描述的资源栈的Id。若stack_name和stack_id同时存在，则资源编排服务会检查是否两个匹配，否则返回400
    * executionPlanId  执行计划ID(uuid)
    *
    * @var string[]
    */
    protected static $setters = [
            'clientRequestId' => 'setClientRequestId',
            'projectId' => 'setProjectId',
            'stackName' => 'setStackName',
            'executionPlanName' => 'setExecutionPlanName',
            'stackId' => 'setStackId',
            'executionPlanId' => 'setExecutionPlanId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * projectId  项目ID，可以从调用API处获取，也可以从控制台获取。  获取方式：https://support.huaweicloud.com/api-ticket/ticket_api_20002.html
    * stackName  用户希望操作的资源栈名称
    * executionPlanName  执行计划的名字。
    * stackId  用户希望描述的资源栈的Id。若stack_name和stack_id同时存在，则资源编排服务会检查是否两个匹配，否则返回400
    * executionPlanId  执行计划ID(uuid)
    *
    * @var string[]
    */
    protected static $getters = [
            'clientRequestId' => 'getClientRequestId',
            'projectId' => 'getProjectId',
            'stackName' => 'getStackName',
            'executionPlanName' => 'getExecutionPlanName',
            'stackId' => 'getStackId',
            'executionPlanId' => 'getExecutionPlanId'
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
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['executionPlanName'] = isset($data['executionPlanName']) ? $data['executionPlanName'] : null;
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['executionPlanId'] = isset($data['executionPlanId']) ? $data['executionPlanId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clientRequestId'] === null) {
            $invalidProperties[] = "'clientRequestId' can't be null";
        }
            if ((mb_strlen($this->container['clientRequestId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clientRequestId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['clientRequestId']) < 36)) {
                $invalidProperties[] = "invalid value for 'clientRequestId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^[A-Za-z0-9]+[A-Za-z0-9-]*$/", $this->container['clientRequestId'])) {
                $invalidProperties[] = "invalid value for 'clientRequestId', must be conform to the pattern /^[A-Za-z0-9]+[A-Za-z0-9-]*$/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 3)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^[A-Za-z0-9-]+$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9-]+$/.";
            }
        if ($this->container['stackName'] === null) {
            $invalidProperties[] = "'stackName' can't be null";
        }
            if ((mb_strlen($this->container['stackName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['stackName'])) {
                $invalidProperties[] = "invalid value for 'stackName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
            }
        if ($this->container['executionPlanName'] === null) {
            $invalidProperties[] = "'executionPlanName' can't be null";
        }
            if ((mb_strlen($this->container['executionPlanName']) > 128)) {
                $invalidProperties[] = "invalid value for 'executionPlanName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['executionPlanName']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionPlanName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['executionPlanName'])) {
                $invalidProperties[] = "invalid value for 'executionPlanName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackId'])) {
                $invalidProperties[] = "invalid value for 'stackId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
            if (!is_null($this->container['executionPlanId']) && (mb_strlen($this->container['executionPlanId']) > 36)) {
                $invalidProperties[] = "invalid value for 'executionPlanId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['executionPlanId']) && (mb_strlen($this->container['executionPlanId']) < 36)) {
                $invalidProperties[] = "invalid value for 'executionPlanId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['executionPlanId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['executionPlanId'])) {
                $invalidProperties[] = "invalid value for 'executionPlanId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
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
    * Gets clientRequestId
    *  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    *
    * @return string
    */
    public function getClientRequestId()
    {
        return $this->container['clientRequestId'];
    }

    /**
    * Sets clientRequestId
    *
    * @param string $clientRequestId 用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    *
    * @return $this
    */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，可以从调用API处获取，也可以从控制台获取。  获取方式：https://support.huaweicloud.com/api-ticket/ticket_api_20002.html
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID，可以从调用API处获取，也可以从控制台获取。  获取方式：https://support.huaweicloud.com/api-ticket/ticket_api_20002.html
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets stackName
    *  用户希望操作的资源栈名称
    *
    * @return string
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string $stackName 用户希望操作的资源栈名称
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets executionPlanName
    *  执行计划的名字。
    *
    * @return string
    */
    public function getExecutionPlanName()
    {
        return $this->container['executionPlanName'];
    }

    /**
    * Sets executionPlanName
    *
    * @param string $executionPlanName 执行计划的名字。
    *
    * @return $this
    */
    public function setExecutionPlanName($executionPlanName)
    {
        $this->container['executionPlanName'] = $executionPlanName;
        return $this;
    }

    /**
    * Gets stackId
    *  用户希望描述的资源栈的Id。若stack_name和stack_id同时存在，则资源编排服务会检查是否两个匹配，否则返回400
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 用户希望描述的资源栈的Id。若stack_name和stack_id同时存在，则资源编排服务会检查是否两个匹配，否则返回400
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets executionPlanId
    *  执行计划ID(uuid)
    *
    * @return string|null
    */
    public function getExecutionPlanId()
    {
        return $this->container['executionPlanId'];
    }

    /**
    * Sets executionPlanId
    *
    * @param string|null $executionPlanId 执行计划ID(uuid)
    *
    * @return $this
    */
    public function setExecutionPlanId($executionPlanId)
    {
        $this->container['executionPlanId'] = $executionPlanId;
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

