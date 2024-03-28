<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportFlinkJobsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportFlinkJobsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsDir  导出作业文件的OBS保存路径。
    * isSelected  是否导出指定的作业。
    * jobSelected  当is_selected=true时，该参数是待导出作业的作业ID集合。当is_selected=true时，此参数必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsDir' => 'string',
            'isSelected' => 'bool',
            'jobSelected' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsDir  导出作业文件的OBS保存路径。
    * isSelected  是否导出指定的作业。
    * jobSelected  当is_selected=true时，该参数是待导出作业的作业ID集合。当is_selected=true时，此参数必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsDir' => null,
        'isSelected' => null,
        'jobSelected' => 'int64'
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
    * obsDir  导出作业文件的OBS保存路径。
    * isSelected  是否导出指定的作业。
    * jobSelected  当is_selected=true时，该参数是待导出作业的作业ID集合。当is_selected=true时，此参数必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsDir' => 'obs_dir',
            'isSelected' => 'is_selected',
            'jobSelected' => 'job_selected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsDir  导出作业文件的OBS保存路径。
    * isSelected  是否导出指定的作业。
    * jobSelected  当is_selected=true时，该参数是待导出作业的作业ID集合。当is_selected=true时，此参数必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'obsDir' => 'setObsDir',
            'isSelected' => 'setIsSelected',
            'jobSelected' => 'setJobSelected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsDir  导出作业文件的OBS保存路径。
    * isSelected  是否导出指定的作业。
    * jobSelected  当is_selected=true时，该参数是待导出作业的作业ID集合。当is_selected=true时，此参数必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'obsDir' => 'getObsDir',
            'isSelected' => 'getIsSelected',
            'jobSelected' => 'getJobSelected'
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
        $this->container['obsDir'] = isset($data['obsDir']) ? $data['obsDir'] : null;
        $this->container['isSelected'] = isset($data['isSelected']) ? $data['isSelected'] : null;
        $this->container['jobSelected'] = isset($data['jobSelected']) ? $data['jobSelected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['obsDir'] === null) {
            $invalidProperties[] = "'obsDir' can't be null";
        }
            if ((mb_strlen($this->container['obsDir']) > 256)) {
                $invalidProperties[] = "invalid value for 'obsDir', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['obsDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsDir', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['isSelected'] === null) {
            $invalidProperties[] = "'isSelected' can't be null";
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
    * Gets obsDir
    *  导出作业文件的OBS保存路径。
    *
    * @return string
    */
    public function getObsDir()
    {
        return $this->container['obsDir'];
    }

    /**
    * Sets obsDir
    *
    * @param string $obsDir 导出作业文件的OBS保存路径。
    *
    * @return $this
    */
    public function setObsDir($obsDir)
    {
        $this->container['obsDir'] = $obsDir;
        return $this;
    }

    /**
    * Gets isSelected
    *  是否导出指定的作业。
    *
    * @return bool
    */
    public function getIsSelected()
    {
        return $this->container['isSelected'];
    }

    /**
    * Sets isSelected
    *
    * @param bool $isSelected 是否导出指定的作业。
    *
    * @return $this
    */
    public function setIsSelected($isSelected)
    {
        $this->container['isSelected'] = $isSelected;
        return $this;
    }

    /**
    * Gets jobSelected
    *  当is_selected=true时，该参数是待导出作业的作业ID集合。当is_selected=true时，此参数必填。
    *
    * @return int[]|null
    */
    public function getJobSelected()
    {
        return $this->container['jobSelected'];
    }

    /**
    * Sets jobSelected
    *
    * @param int[]|null $jobSelected 当is_selected=true时，该参数是待导出作业的作业ID集合。当is_selected=true时，此参数必填。
    *
    * @return $this
    */
    public function setJobSelected($jobSelected)
    {
        $this->container['jobSelected'] = $jobSelected;
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

