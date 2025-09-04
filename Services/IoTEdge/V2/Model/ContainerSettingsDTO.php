<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerSettingsDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerSettingsDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configs  configs
    * imageUrl  镜像存储地址
    * envs  环境变量
    * volumes  卷配置
    * npuType  NPU类型, D310:昇腾310推理卡，D910:昇腾910训练卡;D310P：昇腾710或者310P加速卡
    * vnpuTemplate  NPU算力切分模板,昇腾D310Pro，支持：vir01、vir02、vir02_1c、vir04、vir04_4c_dvpp、vir04_3c、vir04_3c_ndvpp 昇腾D910芯片支持:vir01|vir02|vir04|vir08 可在对应芯片的机器上通过npu-smi info -t template-info命令查询其详细信息
    * resources  resources
    * extDevices  外挂设备配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerConfigsDTO',
            'imageUrl' => 'string',
            'envs' => 'object',
            'volumes' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\VolumeDTO[]',
            'npuType' => 'string',
            'vnpuTemplate' => 'string',
            'resources' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ResourceDTO',
            'extDevices' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ExtDevice[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configs  configs
    * imageUrl  镜像存储地址
    * envs  环境变量
    * volumes  卷配置
    * npuType  NPU类型, D310:昇腾310推理卡，D910:昇腾910训练卡;D310P：昇腾710或者310P加速卡
    * vnpuTemplate  NPU算力切分模板,昇腾D310Pro，支持：vir01、vir02、vir02_1c、vir04、vir04_4c_dvpp、vir04_3c、vir04_3c_ndvpp 昇腾D910芯片支持:vir01|vir02|vir04|vir08 可在对应芯片的机器上通过npu-smi info -t template-info命令查询其详细信息
    * resources  resources
    * extDevices  外挂设备配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configs' => null,
        'imageUrl' => null,
        'envs' => null,
        'volumes' => null,
        'npuType' => null,
        'vnpuTemplate' => null,
        'resources' => null,
        'extDevices' => null
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
    * configs  configs
    * imageUrl  镜像存储地址
    * envs  环境变量
    * volumes  卷配置
    * npuType  NPU类型, D310:昇腾310推理卡，D910:昇腾910训练卡;D310P：昇腾710或者310P加速卡
    * vnpuTemplate  NPU算力切分模板,昇腾D310Pro，支持：vir01、vir02、vir02_1c、vir04、vir04_4c_dvpp、vir04_3c、vir04_3c_ndvpp 昇腾D910芯片支持:vir01|vir02|vir04|vir08 可在对应芯片的机器上通过npu-smi info -t template-info命令查询其详细信息
    * resources  resources
    * extDevices  外挂设备配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configs' => 'configs',
            'imageUrl' => 'image_url',
            'envs' => 'envs',
            'volumes' => 'volumes',
            'npuType' => 'npu_type',
            'vnpuTemplate' => 'vnpu_template',
            'resources' => 'resources',
            'extDevices' => 'ext_devices'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configs  configs
    * imageUrl  镜像存储地址
    * envs  环境变量
    * volumes  卷配置
    * npuType  NPU类型, D310:昇腾310推理卡，D910:昇腾910训练卡;D310P：昇腾710或者310P加速卡
    * vnpuTemplate  NPU算力切分模板,昇腾D310Pro，支持：vir01、vir02、vir02_1c、vir04、vir04_4c_dvpp、vir04_3c、vir04_3c_ndvpp 昇腾D910芯片支持:vir01|vir02|vir04|vir08 可在对应芯片的机器上通过npu-smi info -t template-info命令查询其详细信息
    * resources  resources
    * extDevices  外挂设备配置
    *
    * @var string[]
    */
    protected static $setters = [
            'configs' => 'setConfigs',
            'imageUrl' => 'setImageUrl',
            'envs' => 'setEnvs',
            'volumes' => 'setVolumes',
            'npuType' => 'setNpuType',
            'vnpuTemplate' => 'setVnpuTemplate',
            'resources' => 'setResources',
            'extDevices' => 'setExtDevices'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configs  configs
    * imageUrl  镜像存储地址
    * envs  环境变量
    * volumes  卷配置
    * npuType  NPU类型, D310:昇腾310推理卡，D910:昇腾910训练卡;D310P：昇腾710或者310P加速卡
    * vnpuTemplate  NPU算力切分模板,昇腾D310Pro，支持：vir01、vir02、vir02_1c、vir04、vir04_4c_dvpp、vir04_3c、vir04_3c_ndvpp 昇腾D910芯片支持:vir01|vir02|vir04|vir08 可在对应芯片的机器上通过npu-smi info -t template-info命令查询其详细信息
    * resources  resources
    * extDevices  外挂设备配置
    *
    * @var string[]
    */
    protected static $getters = [
            'configs' => 'getConfigs',
            'imageUrl' => 'getImageUrl',
            'envs' => 'getEnvs',
            'volumes' => 'getVolumes',
            'npuType' => 'getNpuType',
            'vnpuTemplate' => 'getVnpuTemplate',
            'resources' => 'getResources',
            'extDevices' => 'getExtDevices'
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
    const NPU_TYPE_D310 = 'D310';
    const NPU_TYPE_D910 = 'D910';
    const NPU_TYPE_D310_P = 'D310P';
    const VNPU_TEMPLATE_VIR01 = 'vir01';
    const VNPU_TEMPLATE_VIR02 = 'vir02';
    const VNPU_TEMPLATE_VIR04 = 'vir04';
    const VNPU_TEMPLATE_VIR08 = 'vir08';
    const VNPU_TEMPLATE_VIR02_1C = 'vir02_1c';
    const VNPU_TEMPLATE_VIR04_3C = 'vir04_3c';
    const VNPU_TEMPLATE_VIR04_3C_NDVPP = 'vir04_3c_ndvpp';
    const VNPU_TEMPLATE_VIR04_4C_DVPP = 'vir04_4c_dvpp';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNpuTypeAllowableValues()
    {
        return [
            self::NPU_TYPE_D310,
            self::NPU_TYPE_D910,
            self::NPU_TYPE_D310_P,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVnpuTemplateAllowableValues()
    {
        return [
            self::VNPU_TEMPLATE_VIR01,
            self::VNPU_TEMPLATE_VIR02,
            self::VNPU_TEMPLATE_VIR04,
            self::VNPU_TEMPLATE_VIR08,
            self::VNPU_TEMPLATE_VIR02_1C,
            self::VNPU_TEMPLATE_VIR04_3C,
            self::VNPU_TEMPLATE_VIR04_3C_NDVPP,
            self::VNPU_TEMPLATE_VIR04_4C_DVPP,
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
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['envs'] = isset($data['envs']) ? $data['envs'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['npuType'] = isset($data['npuType']) ? $data['npuType'] : null;
        $this->container['vnpuTemplate'] = isset($data['vnpuTemplate']) ? $data['vnpuTemplate'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['extDevices'] = isset($data['extDevices']) ? $data['extDevices'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageUrl'] === null) {
            $invalidProperties[] = "'imageUrl' can't be null";
        }
            if ((mb_strlen($this->container['imageUrl']) > 1000000)) {
                $invalidProperties[] = "invalid value for 'imageUrl', the character length must be smaller than or equal to 1000000.";
            }
            if ((mb_strlen($this->container['imageUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageUrl', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[-A-Za-z0-9+&@#\/%?=~_|!:,.;]+[-A-Za-z0-9+&@#\/%=~_|]/", $this->container['imageUrl'])) {
                $invalidProperties[] = "invalid value for 'imageUrl', must be conform to the pattern /[-A-Za-z0-9+&@#\/%?=~_|!:,.;]+[-A-Za-z0-9+&@#\/%=~_|]/.";
            }
            $allowedValues = $this->getNpuTypeAllowableValues();
                if (!is_null($this->container['npuType']) && !in_array($this->container['npuType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'npuType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['npuType']) && (mb_strlen($this->container['npuType']) > 16)) {
                $invalidProperties[] = "invalid value for 'npuType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['npuType']) && (mb_strlen($this->container['npuType']) < 0)) {
                $invalidProperties[] = "invalid value for 'npuType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['npuType']) && !preg_match("/(D310|D310P|D910)/", $this->container['npuType'])) {
                $invalidProperties[] = "invalid value for 'npuType', must be conform to the pattern /(D310|D310P|D910)/.";
            }
            $allowedValues = $this->getVnpuTemplateAllowableValues();
                if (!is_null($this->container['vnpuTemplate']) && !in_array($this->container['vnpuTemplate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vnpuTemplate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['vnpuTemplate']) && (mb_strlen($this->container['vnpuTemplate']) > 32)) {
                $invalidProperties[] = "invalid value for 'vnpuTemplate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['vnpuTemplate']) && (mb_strlen($this->container['vnpuTemplate']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnpuTemplate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnpuTemplate']) && !preg_match("/(vir01|vir02|vir04|vir08|vir02_1c|vir04_3c|vir04_3c_ndvpp|vir04_4c_dvpp)/", $this->container['vnpuTemplate'])) {
                $invalidProperties[] = "invalid value for 'vnpuTemplate', must be conform to the pattern /(vir01|vir02|vir04|vir08|vir02_1c|vir04_3c|vir04_3c_ndvpp|vir04_4c_dvpp)/.";
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
    * Gets configs
    *  configs
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerConfigsDTO|null
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerConfigsDTO|null $configs configs
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
        return $this;
    }

    /**
    * Gets imageUrl
    *  镜像存储地址
    *
    * @return string
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string $imageUrl 镜像存储地址
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets envs
    *  环境变量
    *
    * @return object|null
    */
    public function getEnvs()
    {
        return $this->container['envs'];
    }

    /**
    * Sets envs
    *
    * @param object|null $envs 环境变量
    *
    * @return $this
    */
    public function setEnvs($envs)
    {
        $this->container['envs'] = $envs;
        return $this;
    }

    /**
    * Gets volumes
    *  卷配置
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\VolumeDTO[]|null
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\VolumeDTO[]|null $volumes 卷配置
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
        return $this;
    }

    /**
    * Gets npuType
    *  NPU类型, D310:昇腾310推理卡，D910:昇腾910训练卡;D310P：昇腾710或者310P加速卡
    *
    * @return string|null
    */
    public function getNpuType()
    {
        return $this->container['npuType'];
    }

    /**
    * Sets npuType
    *
    * @param string|null $npuType NPU类型, D310:昇腾310推理卡，D910:昇腾910训练卡;D310P：昇腾710或者310P加速卡
    *
    * @return $this
    */
    public function setNpuType($npuType)
    {
        $this->container['npuType'] = $npuType;
        return $this;
    }

    /**
    * Gets vnpuTemplate
    *  NPU算力切分模板,昇腾D310Pro，支持：vir01、vir02、vir02_1c、vir04、vir04_4c_dvpp、vir04_3c、vir04_3c_ndvpp 昇腾D910芯片支持:vir01|vir02|vir04|vir08 可在对应芯片的机器上通过npu-smi info -t template-info命令查询其详细信息
    *
    * @return string|null
    */
    public function getVnpuTemplate()
    {
        return $this->container['vnpuTemplate'];
    }

    /**
    * Sets vnpuTemplate
    *
    * @param string|null $vnpuTemplate NPU算力切分模板,昇腾D310Pro，支持：vir01、vir02、vir02_1c、vir04、vir04_4c_dvpp、vir04_3c、vir04_3c_ndvpp 昇腾D910芯片支持:vir01|vir02|vir04|vir08 可在对应芯片的机器上通过npu-smi info -t template-info命令查询其详细信息
    *
    * @return $this
    */
    public function setVnpuTemplate($vnpuTemplate)
    {
        $this->container['vnpuTemplate'] = $vnpuTemplate;
        return $this;
    }

    /**
    * Gets resources
    *  resources
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ResourceDTO|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ResourceDTO|null $resources resources
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets extDevices
    *  外挂设备配置
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ExtDevice[]|null
    */
    public function getExtDevices()
    {
        return $this->container['extDevices'];
    }

    /**
    * Sets extDevices
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ExtDevice[]|null $extDevices 外挂设备配置
    *
    * @return $this
    */
    public function setExtDevices($extDevices)
    {
        $this->container['extDevices'] = $extDevices;
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

