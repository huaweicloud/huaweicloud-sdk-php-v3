<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowShareFeatureGatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowShareFeatureGatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableExperience  是否支持体验馆
    * enableHssService  是否支持对接hss服务
    * enableImageScan  是否支持镜像扫描
    * enableSm3  是否支持国密场景
    * enableImageSync  是否支持镜像同步
    * enableCciService  是否支持对接cci服务
    * enableImageLabel  是否支持镜像标签
    * enablePipeline  是否支持流水线服务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableExperience' => 'bool',
            'enableHssService' => 'bool',
            'enableImageScan' => 'bool',
            'enableSm3' => 'bool',
            'enableImageSync' => 'bool',
            'enableCciService' => 'bool',
            'enableImageLabel' => 'bool',
            'enablePipeline' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableExperience  是否支持体验馆
    * enableHssService  是否支持对接hss服务
    * enableImageScan  是否支持镜像扫描
    * enableSm3  是否支持国密场景
    * enableImageSync  是否支持镜像同步
    * enableCciService  是否支持对接cci服务
    * enableImageLabel  是否支持镜像标签
    * enablePipeline  是否支持流水线服务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableExperience' => null,
        'enableHssService' => null,
        'enableImageScan' => null,
        'enableSm3' => null,
        'enableImageSync' => null,
        'enableCciService' => null,
        'enableImageLabel' => null,
        'enablePipeline' => null
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
    * enableExperience  是否支持体验馆
    * enableHssService  是否支持对接hss服务
    * enableImageScan  是否支持镜像扫描
    * enableSm3  是否支持国密场景
    * enableImageSync  是否支持镜像同步
    * enableCciService  是否支持对接cci服务
    * enableImageLabel  是否支持镜像标签
    * enablePipeline  是否支持流水线服务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableExperience' => 'enable_experience',
            'enableHssService' => 'enable_hss_service',
            'enableImageScan' => 'enable_image_scan',
            'enableSm3' => 'enable_sm3',
            'enableImageSync' => 'enable_image_sync',
            'enableCciService' => 'enable_cci_service',
            'enableImageLabel' => 'enable_image_label',
            'enablePipeline' => 'enable_pipeline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableExperience  是否支持体验馆
    * enableHssService  是否支持对接hss服务
    * enableImageScan  是否支持镜像扫描
    * enableSm3  是否支持国密场景
    * enableImageSync  是否支持镜像同步
    * enableCciService  是否支持对接cci服务
    * enableImageLabel  是否支持镜像标签
    * enablePipeline  是否支持流水线服务
    *
    * @var string[]
    */
    protected static $setters = [
            'enableExperience' => 'setEnableExperience',
            'enableHssService' => 'setEnableHssService',
            'enableImageScan' => 'setEnableImageScan',
            'enableSm3' => 'setEnableSm3',
            'enableImageSync' => 'setEnableImageSync',
            'enableCciService' => 'setEnableCciService',
            'enableImageLabel' => 'setEnableImageLabel',
            'enablePipeline' => 'setEnablePipeline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableExperience  是否支持体验馆
    * enableHssService  是否支持对接hss服务
    * enableImageScan  是否支持镜像扫描
    * enableSm3  是否支持国密场景
    * enableImageSync  是否支持镜像同步
    * enableCciService  是否支持对接cci服务
    * enableImageLabel  是否支持镜像标签
    * enablePipeline  是否支持流水线服务
    *
    * @var string[]
    */
    protected static $getters = [
            'enableExperience' => 'getEnableExperience',
            'enableHssService' => 'getEnableHssService',
            'enableImageScan' => 'getEnableImageScan',
            'enableSm3' => 'getEnableSm3',
            'enableImageSync' => 'getEnableImageSync',
            'enableCciService' => 'getEnableCciService',
            'enableImageLabel' => 'getEnableImageLabel',
            'enablePipeline' => 'getEnablePipeline'
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
        $this->container['enableExperience'] = isset($data['enableExperience']) ? $data['enableExperience'] : null;
        $this->container['enableHssService'] = isset($data['enableHssService']) ? $data['enableHssService'] : null;
        $this->container['enableImageScan'] = isset($data['enableImageScan']) ? $data['enableImageScan'] : null;
        $this->container['enableSm3'] = isset($data['enableSm3']) ? $data['enableSm3'] : null;
        $this->container['enableImageSync'] = isset($data['enableImageSync']) ? $data['enableImageSync'] : null;
        $this->container['enableCciService'] = isset($data['enableCciService']) ? $data['enableCciService'] : null;
        $this->container['enableImageLabel'] = isset($data['enableImageLabel']) ? $data['enableImageLabel'] : null;
        $this->container['enablePipeline'] = isset($data['enablePipeline']) ? $data['enablePipeline'] : null;
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
    * Gets enableExperience
    *  是否支持体验馆
    *
    * @return bool|null
    */
    public function getEnableExperience()
    {
        return $this->container['enableExperience'];
    }

    /**
    * Sets enableExperience
    *
    * @param bool|null $enableExperience 是否支持体验馆
    *
    * @return $this
    */
    public function setEnableExperience($enableExperience)
    {
        $this->container['enableExperience'] = $enableExperience;
        return $this;
    }

    /**
    * Gets enableHssService
    *  是否支持对接hss服务
    *
    * @return bool|null
    */
    public function getEnableHssService()
    {
        return $this->container['enableHssService'];
    }

    /**
    * Sets enableHssService
    *
    * @param bool|null $enableHssService 是否支持对接hss服务
    *
    * @return $this
    */
    public function setEnableHssService($enableHssService)
    {
        $this->container['enableHssService'] = $enableHssService;
        return $this;
    }

    /**
    * Gets enableImageScan
    *  是否支持镜像扫描
    *
    * @return bool|null
    */
    public function getEnableImageScan()
    {
        return $this->container['enableImageScan'];
    }

    /**
    * Sets enableImageScan
    *
    * @param bool|null $enableImageScan 是否支持镜像扫描
    *
    * @return $this
    */
    public function setEnableImageScan($enableImageScan)
    {
        $this->container['enableImageScan'] = $enableImageScan;
        return $this;
    }

    /**
    * Gets enableSm3
    *  是否支持国密场景
    *
    * @return bool|null
    */
    public function getEnableSm3()
    {
        return $this->container['enableSm3'];
    }

    /**
    * Sets enableSm3
    *
    * @param bool|null $enableSm3 是否支持国密场景
    *
    * @return $this
    */
    public function setEnableSm3($enableSm3)
    {
        $this->container['enableSm3'] = $enableSm3;
        return $this;
    }

    /**
    * Gets enableImageSync
    *  是否支持镜像同步
    *
    * @return bool|null
    */
    public function getEnableImageSync()
    {
        return $this->container['enableImageSync'];
    }

    /**
    * Sets enableImageSync
    *
    * @param bool|null $enableImageSync 是否支持镜像同步
    *
    * @return $this
    */
    public function setEnableImageSync($enableImageSync)
    {
        $this->container['enableImageSync'] = $enableImageSync;
        return $this;
    }

    /**
    * Gets enableCciService
    *  是否支持对接cci服务
    *
    * @return bool|null
    */
    public function getEnableCciService()
    {
        return $this->container['enableCciService'];
    }

    /**
    * Sets enableCciService
    *
    * @param bool|null $enableCciService 是否支持对接cci服务
    *
    * @return $this
    */
    public function setEnableCciService($enableCciService)
    {
        $this->container['enableCciService'] = $enableCciService;
        return $this;
    }

    /**
    * Gets enableImageLabel
    *  是否支持镜像标签
    *
    * @return bool|null
    */
    public function getEnableImageLabel()
    {
        return $this->container['enableImageLabel'];
    }

    /**
    * Sets enableImageLabel
    *
    * @param bool|null $enableImageLabel 是否支持镜像标签
    *
    * @return $this
    */
    public function setEnableImageLabel($enableImageLabel)
    {
        $this->container['enableImageLabel'] = $enableImageLabel;
        return $this;
    }

    /**
    * Gets enablePipeline
    *  是否支持流水线服务
    *
    * @return bool|null
    */
    public function getEnablePipeline()
    {
        return $this->container['enablePipeline'];
    }

    /**
    * Sets enablePipeline
    *
    * @param bool|null $enablePipeline 是否支持流水线服务
    *
    * @return $this
    */
    public function setEnablePipeline($enablePipeline)
    {
        $this->container['enablePipeline'] = $enablePipeline;
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

