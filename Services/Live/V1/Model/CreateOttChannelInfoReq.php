<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOttChannelInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOttChannelInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * name  频道名。可选配置
    * state  频道状态 - ON：频道下发成功后，自动启动拉流、转码、录制等功能 - OFF：仅保存频道信息，不启动频道
    * mode  频道模式 ADD_CDN：一站式服务，源站和CDN绑在一起（默认） ONLY_OS：独立源站服务，CDN和源站解耦
    * region  当mode是ONLY_OS时，该字段生效，表示频道所在Region
    * input  input
    * encoderSettings  转码模板配置
    * recordSettings  recordSettings
    * endpoints  频道出流信息
    * encoderSettingsExpand  encoderSettingsExpand
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'appName' => 'string',
            'id' => 'string',
            'name' => 'string',
            'state' => 'string',
            'mode' => 'string',
            'region' => 'string',
            'input' => '\HuaweiCloud\SDK\Live\V1\Model\InputStreamInfo',
            'encoderSettings' => '\HuaweiCloud\SDK\Live\V1\Model\ModifyOttChannelEncoderSettingsEncoderSettings[]',
            'recordSettings' => '\HuaweiCloud\SDK\Live\V1\Model\CreateOttChannelInfoReqRecordSettings',
            'endpoints' => '\HuaweiCloud\SDK\Live\V1\Model\EndpointItem[]',
            'encoderSettingsExpand' => '\HuaweiCloud\SDK\Live\V1\Model\EncoderSettingsExpand'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * name  频道名。可选配置
    * state  频道状态 - ON：频道下发成功后，自动启动拉流、转码、录制等功能 - OFF：仅保存频道信息，不启动频道
    * mode  频道模式 ADD_CDN：一站式服务，源站和CDN绑在一起（默认） ONLY_OS：独立源站服务，CDN和源站解耦
    * region  当mode是ONLY_OS时，该字段生效，表示频道所在Region
    * input  input
    * encoderSettings  转码模板配置
    * recordSettings  recordSettings
    * endpoints  频道出流信息
    * encoderSettingsExpand  encoderSettingsExpand
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'appName' => null,
        'id' => null,
        'name' => null,
        'state' => null,
        'mode' => null,
        'region' => null,
        'input' => null,
        'encoderSettings' => null,
        'recordSettings' => null,
        'endpoints' => null,
        'encoderSettingsExpand' => null
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
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * name  频道名。可选配置
    * state  频道状态 - ON：频道下发成功后，自动启动拉流、转码、录制等功能 - OFF：仅保存频道信息，不启动频道
    * mode  频道模式 ADD_CDN：一站式服务，源站和CDN绑在一起（默认） ONLY_OS：独立源站服务，CDN和源站解耦
    * region  当mode是ONLY_OS时，该字段生效，表示频道所在Region
    * input  input
    * encoderSettings  转码模板配置
    * recordSettings  recordSettings
    * endpoints  频道出流信息
    * encoderSettingsExpand  encoderSettingsExpand
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'appName' => 'app_name',
            'id' => 'id',
            'name' => 'name',
            'state' => 'state',
            'mode' => 'mode',
            'region' => 'region',
            'input' => 'input',
            'encoderSettings' => 'encoder_settings',
            'recordSettings' => 'record_settings',
            'endpoints' => 'endpoints',
            'encoderSettingsExpand' => 'encoder_settings_expand'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * name  频道名。可选配置
    * state  频道状态 - ON：频道下发成功后，自动启动拉流、转码、录制等功能 - OFF：仅保存频道信息，不启动频道
    * mode  频道模式 ADD_CDN：一站式服务，源站和CDN绑在一起（默认） ONLY_OS：独立源站服务，CDN和源站解耦
    * region  当mode是ONLY_OS时，该字段生效，表示频道所在Region
    * input  input
    * encoderSettings  转码模板配置
    * recordSettings  recordSettings
    * endpoints  频道出流信息
    * encoderSettingsExpand  encoderSettingsExpand
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'id' => 'setId',
            'name' => 'setName',
            'state' => 'setState',
            'mode' => 'setMode',
            'region' => 'setRegion',
            'input' => 'setInput',
            'encoderSettings' => 'setEncoderSettings',
            'recordSettings' => 'setRecordSettings',
            'endpoints' => 'setEndpoints',
            'encoderSettingsExpand' => 'setEncoderSettingsExpand'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * name  频道名。可选配置
    * state  频道状态 - ON：频道下发成功后，自动启动拉流、转码、录制等功能 - OFF：仅保存频道信息，不启动频道
    * mode  频道模式 ADD_CDN：一站式服务，源站和CDN绑在一起（默认） ONLY_OS：独立源站服务，CDN和源站解耦
    * region  当mode是ONLY_OS时，该字段生效，表示频道所在Region
    * input  input
    * encoderSettings  转码模板配置
    * recordSettings  recordSettings
    * endpoints  频道出流信息
    * encoderSettingsExpand  encoderSettingsExpand
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'id' => 'getId',
            'name' => 'getName',
            'state' => 'getState',
            'mode' => 'getMode',
            'region' => 'getRegion',
            'input' => 'getInput',
            'encoderSettings' => 'getEncoderSettings',
            'recordSettings' => 'getRecordSettings',
            'endpoints' => 'getEndpoints',
            'encoderSettingsExpand' => 'getEncoderSettingsExpand'
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
    const STATE_ON = 'ON';
    const STATE_OFF = 'OFF';
    const MODE_ADD_CDN = 'ADD_CDN';
    const MODE_ONLY_OS = 'ONLY_OS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ON,
            self::STATE_OFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ADD_CDN,
            self::MODE_ONLY_OS,
        ];
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['encoderSettings'] = isset($data['encoderSettings']) ? $data['encoderSettings'] : null;
        $this->container['recordSettings'] = isset($data['recordSettings']) ? $data['recordSettings'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['encoderSettingsExpand'] = isset($data['encoderSettingsExpand']) ? $data['encoderSettingsExpand'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
            if ((mb_strlen($this->container['appName']) > 255)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['id']) < 2)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['state']) > 3)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 3.";
            }
            if ((mb_strlen($this->container['state']) < 2)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
        if ($this->container['recordSettings'] === null) {
            $invalidProperties[] = "'recordSettings' can't be null";
        }
        if ($this->container['endpoints'] === null) {
            $invalidProperties[] = "'endpoints' can't be null";
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
    * Gets domain
    *  频道推流域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 频道推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  组名或应用名
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 组名或应用名
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets id
    *  频道ID。频道唯一标识，为必填项。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 频道ID。频道唯一标识，为必填项。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  频道名。可选配置
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
    * @param string|null $name 频道名。可选配置
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  频道状态 - ON：频道下发成功后，自动启动拉流、转码、录制等功能 - OFF：仅保存频道信息，不启动频道
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 频道状态 - ON：频道下发成功后，自动启动拉流、转码、录制等功能 - OFF：仅保存频道信息，不启动频道
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets mode
    *  频道模式 ADD_CDN：一站式服务，源站和CDN绑在一起（默认） ONLY_OS：独立源站服务，CDN和源站解耦
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 频道模式 ADD_CDN：一站式服务，源站和CDN绑在一起（默认） ONLY_OS：独立源站服务，CDN和源站解耦
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets region
    *  当mode是ONLY_OS时，该字段生效，表示频道所在Region
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
    * @param string|null $region 当mode是ONLY_OS时，该字段生效，表示频道所在Region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\InputStreamInfo
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\InputStreamInfo $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets encoderSettings
    *  转码模板配置
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\ModifyOttChannelEncoderSettingsEncoderSettings[]|null
    */
    public function getEncoderSettings()
    {
        return $this->container['encoderSettings'];
    }

    /**
    * Sets encoderSettings
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\ModifyOttChannelEncoderSettingsEncoderSettings[]|null $encoderSettings 转码模板配置
    *
    * @return $this
    */
    public function setEncoderSettings($encoderSettings)
    {
        $this->container['encoderSettings'] = $encoderSettings;
        return $this;
    }

    /**
    * Gets recordSettings
    *  recordSettings
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\CreateOttChannelInfoReqRecordSettings
    */
    public function getRecordSettings()
    {
        return $this->container['recordSettings'];
    }

    /**
    * Sets recordSettings
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\CreateOttChannelInfoReqRecordSettings $recordSettings recordSettings
    *
    * @return $this
    */
    public function setRecordSettings($recordSettings)
    {
        $this->container['recordSettings'] = $recordSettings;
        return $this;
    }

    /**
    * Gets endpoints
    *  频道出流信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\EndpointItem[]
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\EndpointItem[] $endpoints 频道出流信息
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets encoderSettingsExpand
    *  encoderSettingsExpand
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\EncoderSettingsExpand|null
    */
    public function getEncoderSettingsExpand()
    {
        return $this->container['encoderSettingsExpand'];
    }

    /**
    * Sets encoderSettingsExpand
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\EncoderSettingsExpand|null $encoderSettingsExpand encoderSettingsExpand
    *
    * @return $this
    */
    public function setEncoderSettingsExpand($encoderSettingsExpand)
    {
        $this->container['encoderSettingsExpand'] = $encoderSettingsExpand;
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

