<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEditTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEditTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inputs  编辑任务输入
    * fileName  输出文件名
    * editingSettings  editingSettings
    * callbackUrl  回调地址
    * sessionContext  自定义上下文
    * output  output
    * mediaProcessTask  mediaProcessTask
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputs' => '\HuaweiCloud\SDK\Vod\V1\Model\EditMediaTaskInput[]',
            'fileName' => 'string',
            'editingSettings' => '\HuaweiCloud\SDK\Vod\V1\Model\EditingSetting',
            'callbackUrl' => 'string',
            'sessionContext' => 'string',
            'output' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'mediaProcessTask' => '\HuaweiCloud\SDK\Vod\V1\Model\AdditionalObjectProcessReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputs  编辑任务输入
    * fileName  输出文件名
    * editingSettings  editingSettings
    * callbackUrl  回调地址
    * sessionContext  自定义上下文
    * output  output
    * mediaProcessTask  mediaProcessTask
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputs' => null,
        'fileName' => null,
        'editingSettings' => null,
        'callbackUrl' => null,
        'sessionContext' => null,
        'output' => null,
        'mediaProcessTask' => null
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
    * inputs  编辑任务输入
    * fileName  输出文件名
    * editingSettings  editingSettings
    * callbackUrl  回调地址
    * sessionContext  自定义上下文
    * output  output
    * mediaProcessTask  mediaProcessTask
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputs' => 'inputs',
            'fileName' => 'file_name',
            'editingSettings' => 'editing_settings',
            'callbackUrl' => 'callback_url',
            'sessionContext' => 'session_context',
            'output' => 'output',
            'mediaProcessTask' => 'media_process_task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputs  编辑任务输入
    * fileName  输出文件名
    * editingSettings  editingSettings
    * callbackUrl  回调地址
    * sessionContext  自定义上下文
    * output  output
    * mediaProcessTask  mediaProcessTask
    *
    * @var string[]
    */
    protected static $setters = [
            'inputs' => 'setInputs',
            'fileName' => 'setFileName',
            'editingSettings' => 'setEditingSettings',
            'callbackUrl' => 'setCallbackUrl',
            'sessionContext' => 'setSessionContext',
            'output' => 'setOutput',
            'mediaProcessTask' => 'setMediaProcessTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputs  编辑任务输入
    * fileName  输出文件名
    * editingSettings  editingSettings
    * callbackUrl  回调地址
    * sessionContext  自定义上下文
    * output  output
    * mediaProcessTask  mediaProcessTask
    *
    * @var string[]
    */
    protected static $getters = [
            'inputs' => 'getInputs',
            'fileName' => 'getFileName',
            'editingSettings' => 'getEditingSettings',
            'callbackUrl' => 'getCallbackUrl',
            'sessionContext' => 'getSessionContext',
            'output' => 'getOutput',
            'mediaProcessTask' => 'getMediaProcessTask'
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
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['editingSettings'] = isset($data['editingSettings']) ? $data['editingSettings'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
        $this->container['sessionContext'] = isset($data['sessionContext']) ? $data['sessionContext'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['mediaProcessTask'] = isset($data['mediaProcessTask']) ? $data['mediaProcessTask'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['inputs'] === null) {
            $invalidProperties[] = "'inputs' can't be null";
        }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['callbackUrl']) && !preg_match("/^(http|https):\/\/([A-Za-z0-9-_.\/:=+\\s]+)?\/.*/", $this->container['callbackUrl'])) {
                $invalidProperties[] = "invalid value for 'callbackUrl', must be conform to the pattern /^(http|https):\/\/([A-Za-z0-9-_.\/:=+\\s]+)?\/.*/.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) < 0)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['output'] === null) {
            $invalidProperties[] = "'output' can't be null";
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
    * Gets inputs
    *  编辑任务输入
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\EditMediaTaskInput[]
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\EditMediaTaskInput[] $inputs 编辑任务输入
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets fileName
    *  输出文件名
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 输出文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets editingSettings
    *  editingSettings
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\EditingSetting|null
    */
    public function getEditingSettings()
    {
        return $this->container['editingSettings'];
    }

    /**
    * Sets editingSettings
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\EditingSetting|null $editingSettings editingSettings
    *
    * @return $this
    */
    public function setEditingSettings($editingSettings)
    {
        $this->container['editingSettings'] = $editingSettings;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  回调地址
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 回调地址
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
    * Gets sessionContext
    *  自定义上下文
    *
    * @return string|null
    */
    public function getSessionContext()
    {
        return $this->container['sessionContext'];
    }

    /**
    * Sets sessionContext
    *
    * @param string|null $sessionContext 自定义上下文
    *
    * @return $this
    */
    public function setSessionContext($sessionContext)
    {
        $this->container['sessionContext'] = $sessionContext;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets mediaProcessTask
    *  mediaProcessTask
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\AdditionalObjectProcessReq|null
    */
    public function getMediaProcessTask()
    {
        return $this->container['mediaProcessTask'];
    }

    /**
    * Sets mediaProcessTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\AdditionalObjectProcessReq|null $mediaProcessTask mediaProcessTask
    *
    * @return $this
    */
    public function setMediaProcessTask($mediaProcessTask)
    {
        $this->container['mediaProcessTask'] = $mediaProcessTask;
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

