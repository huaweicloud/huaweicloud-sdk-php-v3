<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HISFastScript implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HISFastScript';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptType  脚本类型。SHELL BAT PYTHON POWER_SHELL
    * cmdUser  执行脚本的ECS机器用户。
    * scriptContent  脚本内容。
    * ecsIdList  执行的机器列表。
    * name  任务名称。
    * projectId  项目ID。
    * scriptArgs  任务参数，多个参数以空格分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptType' => 'string',
            'cmdUser' => 'string',
            'scriptContent' => 'string',
            'ecsIdList' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'scriptArgs' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptType  脚本类型。SHELL BAT PYTHON POWER_SHELL
    * cmdUser  执行脚本的ECS机器用户。
    * scriptContent  脚本内容。
    * ecsIdList  执行的机器列表。
    * name  任务名称。
    * projectId  项目ID。
    * scriptArgs  任务参数，多个参数以空格分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptType' => null,
        'cmdUser' => null,
        'scriptContent' => null,
        'ecsIdList' => null,
        'name' => null,
        'projectId' => null,
        'scriptArgs' => null
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
    * scriptType  脚本类型。SHELL BAT PYTHON POWER_SHELL
    * cmdUser  执行脚本的ECS机器用户。
    * scriptContent  脚本内容。
    * ecsIdList  执行的机器列表。
    * name  任务名称。
    * projectId  项目ID。
    * scriptArgs  任务参数，多个参数以空格分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptType' => 'script_type',
            'cmdUser' => 'cmd_user',
            'scriptContent' => 'script_content',
            'ecsIdList' => 'ecs_id_list',
            'name' => 'name',
            'projectId' => 'project_id',
            'scriptArgs' => 'script_args'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptType  脚本类型。SHELL BAT PYTHON POWER_SHELL
    * cmdUser  执行脚本的ECS机器用户。
    * scriptContent  脚本内容。
    * ecsIdList  执行的机器列表。
    * name  任务名称。
    * projectId  项目ID。
    * scriptArgs  任务参数，多个参数以空格分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptType' => 'setScriptType',
            'cmdUser' => 'setCmdUser',
            'scriptContent' => 'setScriptContent',
            'ecsIdList' => 'setEcsIdList',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'scriptArgs' => 'setScriptArgs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptType  脚本类型。SHELL BAT PYTHON POWER_SHELL
    * cmdUser  执行脚本的ECS机器用户。
    * scriptContent  脚本内容。
    * ecsIdList  执行的机器列表。
    * name  任务名称。
    * projectId  项目ID。
    * scriptArgs  任务参数，多个参数以空格分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptType' => 'getScriptType',
            'cmdUser' => 'getCmdUser',
            'scriptContent' => 'getScriptContent',
            'ecsIdList' => 'getEcsIdList',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'scriptArgs' => 'getScriptArgs'
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
        $this->container['scriptType'] = isset($data['scriptType']) ? $data['scriptType'] : null;
        $this->container['cmdUser'] = isset($data['cmdUser']) ? $data['cmdUser'] : null;
        $this->container['scriptContent'] = isset($data['scriptContent']) ? $data['scriptContent'] : null;
        $this->container['ecsIdList'] = isset($data['ecsIdList']) ? $data['ecsIdList'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['scriptArgs'] = isset($data['scriptArgs']) ? $data['scriptArgs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scriptType'] === null) {
            $invalidProperties[] = "'scriptType' can't be null";
        }
            if ((mb_strlen($this->container['scriptType']) > 20)) {
                $invalidProperties[] = "invalid value for 'scriptType', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['scriptType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['cmdUser'] === null) {
            $invalidProperties[] = "'cmdUser' can't be null";
        }
            if ((mb_strlen($this->container['cmdUser']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cmdUser', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['cmdUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'cmdUser', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['scriptContent'] === null) {
            $invalidProperties[] = "'scriptContent' can't be null";
        }
            if ((mb_strlen($this->container['scriptContent']) > 10000)) {
                $invalidProperties[] = "invalid value for 'scriptContent', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['scriptContent']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptContent', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ecsIdList'] === null) {
            $invalidProperties[] = "'ecsIdList' can't be null";
        }
            if ((mb_strlen($this->container['ecsIdList']) > 10000)) {
                $invalidProperties[] = "invalid value for 'ecsIdList', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['ecsIdList']) < 1)) {
                $invalidProperties[] = "invalid value for 'ecsIdList', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['scriptArgs']) && (mb_strlen($this->container['scriptArgs']) > 10000)) {
                $invalidProperties[] = "invalid value for 'scriptArgs', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['scriptArgs']) && (mb_strlen($this->container['scriptArgs']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptArgs', the character length must be bigger than or equal to 1.";
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
    * Gets scriptType
    *  脚本类型。SHELL BAT PYTHON POWER_SHELL
    *
    * @return string
    */
    public function getScriptType()
    {
        return $this->container['scriptType'];
    }

    /**
    * Sets scriptType
    *
    * @param string $scriptType 脚本类型。SHELL BAT PYTHON POWER_SHELL
    *
    * @return $this
    */
    public function setScriptType($scriptType)
    {
        $this->container['scriptType'] = $scriptType;
        return $this;
    }

    /**
    * Gets cmdUser
    *  执行脚本的ECS机器用户。
    *
    * @return string
    */
    public function getCmdUser()
    {
        return $this->container['cmdUser'];
    }

    /**
    * Sets cmdUser
    *
    * @param string $cmdUser 执行脚本的ECS机器用户。
    *
    * @return $this
    */
    public function setCmdUser($cmdUser)
    {
        $this->container['cmdUser'] = $cmdUser;
        return $this;
    }

    /**
    * Gets scriptContent
    *  脚本内容。
    *
    * @return string
    */
    public function getScriptContent()
    {
        return $this->container['scriptContent'];
    }

    /**
    * Sets scriptContent
    *
    * @param string $scriptContent 脚本内容。
    *
    * @return $this
    */
    public function setScriptContent($scriptContent)
    {
        $this->container['scriptContent'] = $scriptContent;
        return $this;
    }

    /**
    * Gets ecsIdList
    *  执行的机器列表。
    *
    * @return string
    */
    public function getEcsIdList()
    {
        return $this->container['ecsIdList'];
    }

    /**
    * Sets ecsIdList
    *
    * @param string $ecsIdList 执行的机器列表。
    *
    * @return $this
    */
    public function setEcsIdList($ecsIdList)
    {
        $this->container['ecsIdList'] = $ecsIdList;
        return $this;
    }

    /**
    * Gets name
    *  任务名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
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
    * @param string $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets scriptArgs
    *  任务参数，多个参数以空格分隔。
    *
    * @return string|null
    */
    public function getScriptArgs()
    {
        return $this->container['scriptArgs'];
    }

    /**
    * Sets scriptArgs
    *
    * @param string|null $scriptArgs 任务参数，多个参数以空格分隔。
    *
    * @return $this
    */
    public function setScriptArgs($scriptArgs)
    {
        $this->container['scriptArgs'] = $scriptArgs;
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

