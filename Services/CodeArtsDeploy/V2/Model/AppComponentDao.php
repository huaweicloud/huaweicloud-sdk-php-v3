<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppComponentDao implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppComponentDao';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  部署任务id
    * appId  AOM应用id
    * appName  AOM应用名称
    * compId  AOM应用组件id
    * compName  AOM应用组件名称
    * domainId  租户id
    * region  局点信息
    * state  AOM应用组件是否生效，0表示初始化，1表示执行成功，已生效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'appId' => 'string',
            'appName' => 'string',
            'compId' => 'string',
            'compName' => 'string',
            'domainId' => 'string',
            'region' => 'string',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  部署任务id
    * appId  AOM应用id
    * appName  AOM应用名称
    * compId  AOM应用组件id
    * compName  AOM应用组件名称
    * domainId  租户id
    * region  局点信息
    * state  AOM应用组件是否生效，0表示初始化，1表示执行成功，已生效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'appId' => null,
        'appName' => null,
        'compId' => null,
        'compName' => null,
        'domainId' => null,
        'region' => null,
        'state' => null
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
    * taskId  部署任务id
    * appId  AOM应用id
    * appName  AOM应用名称
    * compId  AOM应用组件id
    * compName  AOM应用组件名称
    * domainId  租户id
    * region  局点信息
    * state  AOM应用组件是否生效，0表示初始化，1表示执行成功，已生效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'appId' => 'app_id',
            'appName' => 'app_name',
            'compId' => 'comp_id',
            'compName' => 'comp_name',
            'domainId' => 'domain_id',
            'region' => 'region',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  部署任务id
    * appId  AOM应用id
    * appName  AOM应用名称
    * compId  AOM应用组件id
    * compName  AOM应用组件名称
    * domainId  租户id
    * region  局点信息
    * state  AOM应用组件是否生效，0表示初始化，1表示执行成功，已生效
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'compId' => 'setCompId',
            'compName' => 'setCompName',
            'domainId' => 'setDomainId',
            'region' => 'setRegion',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  部署任务id
    * appId  AOM应用id
    * appName  AOM应用名称
    * compId  AOM应用组件id
    * compName  AOM应用组件名称
    * domainId  租户id
    * region  局点信息
    * state  AOM应用组件是否生效，0表示初始化，1表示执行成功，已生效
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'compId' => 'getCompId',
            'compName' => 'getCompName',
            'domainId' => 'getDomainId',
            'region' => 'getRegion',
            'state' => 'getState'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['compId'] = isset($data['compId']) ? $data['compId'] : null;
        $this->container['compName'] = isset($data['compName']) ? $data['compName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['appName']) && !preg_match("/^deploy_[A-Za-z0-9]{6}$/", $this->container['appName'])) {
                $invalidProperties[] = "invalid value for 'appName', must be conform to the pattern /^deploy_[A-Za-z0-9]{6}$/.";
            }
            if (!is_null($this->container['compId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['compId'])) {
                $invalidProperties[] = "invalid value for 'compId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['compName']) && (mb_strlen($this->container['compName']) > 128)) {
                $invalidProperties[] = "invalid value for 'compName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['compName']) && (mb_strlen($this->container['compName']) < 0)) {
                $invalidProperties[] = "invalid value for 'compName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 256)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && !preg_match("/^[0-1]{1}$/", $this->container['state'])) {
                $invalidProperties[] = "invalid value for 'state', must be conform to the pattern /^[0-1]{1}$/.";
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
    *  部署任务id
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
    * @param string|null $taskId 部署任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets appId
    *  AOM应用id
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId AOM应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  AOM应用名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName AOM应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets compId
    *  AOM应用组件id
    *
    * @return string|null
    */
    public function getCompId()
    {
        return $this->container['compId'];
    }

    /**
    * Sets compId
    *
    * @param string|null $compId AOM应用组件id
    *
    * @return $this
    */
    public function setCompId($compId)
    {
        $this->container['compId'] = $compId;
        return $this;
    }

    /**
    * Gets compName
    *  AOM应用组件名称
    *
    * @return string|null
    */
    public function getCompName()
    {
        return $this->container['compName'];
    }

    /**
    * Sets compName
    *
    * @param string|null $compName AOM应用组件名称
    *
    * @return $this
    */
    public function setCompName($compName)
    {
        $this->container['compName'] = $compName;
        return $this;
    }

    /**
    * Gets domainId
    *  租户id
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
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets region
    *  局点信息
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 局点信息
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets state
    *  AOM应用组件是否生效，0表示初始化，1表示执行成功，已生效
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state AOM应用组件是否生效，0表示初始化，1表示执行成功，已生效
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

